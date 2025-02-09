<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Stripe\Stripe;
use Stripe\Charge;
use GuzzleHttp\Client;

class PaymentController extends Controller
{
    public function processCheckout(Request $request)
    {
        try {
            // Stripe Key
            Stripe::setApiKey(env('STRIPE_SECRET'));

            // Charge
            $charge = Charge::create([
                'amount' => $request->input('totalAmount') * 100, // Convert to cents
                'currency' => 'myr',
                'source' => $request->input('stripeToken'), // Ensure stripeToken is passed
                'description' => 'Payment for Order',
            ]);

            // Database Order Creation
            $userId = auth()->id();
            $totalAmount = $request->input('totalAmount');

            $orderId = DB::table('orders')->insertGetId([
                'user_id' => $userId,
                'total' => $totalAmount,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Fetch Order Items
            $cartItems = DB::table('cart')->where('user_id', $userId)->get();
            $itemsList = "";
            foreach ($cartItems as $item) {
                $itemsList .= $item->item_name . " (x" . $item->quantity . "), ";
            }

            // Send WhatsApp Notification
            $this->sendWhatsAppNotification($orderId, $totalAmount, $itemsList);

            // Redirect to payment completed page
            return redirect()->route('payment.completed', ['orderId' => $orderId]);

        } catch (\Exception $e) {
            // If error happens
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    private function sendWhatsAppNotification($orderId, $totalAmount, $itemsList)
    {
        try {
            $client = new Client();

            // Your Meta WhatsApp API credentials
            $whatsapp_api_url = "https://graph.facebook.com/v21.0/586813277840742/messages";
            $access_token = "EAAIsKHuk1zUBOwy7FF7QGr6e0NzuXj5ost3I7z7g6uPX9e4HNRFJxYorawbowsq5yM3jgHLlWlt3nyEuqZCrEJkVBaiCPMsiloCsU6gxAj3miVKZCKrMmPNQ7KGCt1QuR9VFBoIFFl3i2oaeLiiVuWAhlXJTv1in0IWKpslnvZBT0O6gAuosbSVZAr76UWQl7bAAu8jeSLn9QpTqYhmjXeDYXiMZD"; // Store in .env for security

            // Staff phone number (WhatsApp-registered)
            $staff_phone_number = "60139390341"; // Example: Malaysian number (include country code)

            // Format WhatsApp Message
            $message = "New Order Received!\n"
                . "Order ID: $orderId\n"
                . "Items: $itemsList\n"
                . "Total: RM $totalAmount\n"
                . "Please prepare the order.";

            // API Request Data
            $response = $client->post($whatsapp_api_url, [
                'headers' => [
                    'Authorization' => "Bearer $access_token",
                    'Content-Type' => 'application/json'
                ],
                'json' => [
                    "messaging_product" => "whatsapp",
                    "to" => $staff_phone_number,
                    "type" => "text",
                    "text" => [
                        "body" => $message
                    ]
                ]
            ]);

            Log::info("WhatsApp message sent: " . $response->getBody());

        } catch (\Exception $e) {
            Log::error("WhatsApp Notification Failed: " . $e->getMessage());
        }
    }

    public function showPaymentPage()
    {
        $userId = auth()->id();
        $cartItems = DB::table('cart')->where('user_id', $userId)->get();
        $totalAmount = $cartItems->sum(function ($item) {
            return $item->item_price * $item->quantity;
        });

        return view('Manage Payment.PaymentPage', compact('cartItems', 'totalAmount'));
    }

    public function showPaymentCompleted($orderId)
    {
        $userId = auth()->id();
        
        // Fetch order details
        $order = DB::table('orders')->where('id', $orderId)->first();

        // Fetch items to show on receipt
        $cartItems = DB::table('cart')->where('user_id', $userId)->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->item_price * $item->quantity;
        });

        $taxes = 3; // Tax
        $deliveryFee = 0; // Delivery (not used)
        $total = $subtotal + $taxes + $deliveryFee;

        // Pass data
        $receiptData = compact('cartItems', 'subtotal', 'taxes', 'deliveryFee', 'total', 'orderId');
        
        // Clear the cart after generating receipt data
        $this->clearCart($userId);

        return view('Manage Payment.PaymentCompletedPage', $receiptData);
    }

    public function createCheckoutSession(Request $request)
    {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'myr',
                        'product_data' => [
                            'name' => 'Order Total',
                        ],
                        'unit_amount' => $request->input('amount'), // Amount in cents
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => url('/payment-completed/{CHECKOUT_SESSION_ID}'),
                'cancel_url' => url('/payment'),
            ]);

            return response()->json(['id' => $session->id]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function clearCart($userId)
    {
        DB::table('cart')->where('user_id', $userId)->delete();
    }
}
