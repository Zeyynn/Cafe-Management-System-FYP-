<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentController extends Controller
{
    public function processCheckout(Request $request)
    {
        try {
            // Set Stripe Secret Key
            Stripe::setApiKey(env('STRIPE_SECRET'));

            // Create a Charge
            $charge = Charge::create([
                'amount' => $request->input('totalAmount') * 100, // Convert to cents
                'currency' => 'myr',
                'source' => $request->input('stripeToken'), // Ensure stripeToken is passed
                'description' => 'Payment for Order',
            ]);

            // Save order to database
            $userId = auth()->id();
            $totalAmount = $request->input('totalAmount');

            $orderId = DB::table('orders')->insertGetId([
                'user_id' => $userId,
                'total' => $totalAmount,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Redirect to payment completed page with order ID
            return redirect()->route('payment.completed', ['orderId' => $orderId]);
    } catch (\Exception $e) {
        // Handle errors
        return back()->withErrors(['error' => $e->getMessage()]);
        }
        Log::info('Process Checkout Request:', $request->all());
        Log::info('Order ID:', ['orderId' => $orderId ?? 'No Order ID']);
        Log::info('Processing checkout', ['orderId' => $orderId]);

    }

    public function showPaymentPage()
    {
        $userId = auth()->id(); // Get the currently authenticated user's ID
        $cartItems = DB::table('cart')->where('user_id', $userId)->get();
        $totalAmount = $cartItems->sum(function ($item) {
            return $item->item_price * $item->quantity;
        });
        return view('Manage Payment.PaymentPage', compact('cartItems', 'totalAmount'));
    }

    public function showPaymentCompleted($orderId)
    {
        $userId = auth()->id();
        $order = DB::table('orders')->where('id', $orderId)->first();
        $cartItems = DB::table('cart')->where('user_id', $userId)->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->item_price * $item->quantity;
        });

        $taxes = 15; // Example tax value
        $deliveryFee = 10; // Example delivery fee
        $total = $subtotal + $taxes + $deliveryFee;

        // Pass data to the view
        return view('Manage Payment.PaymentCompletedPage', compact('cartItems', 'subtotal', 'taxes', 'deliveryFee', 'total', 'orderId'));
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
}
