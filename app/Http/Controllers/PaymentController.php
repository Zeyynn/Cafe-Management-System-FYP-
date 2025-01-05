<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
                'amount' => $request->input('amount') * 100, // Convert to cents
                'currency' => 'myr', // Adjust currency if needed
                'source' => $request->input('stripeToken'),
                'description' => 'Payment for Order',
            ]);

            // Save order to database
            $userId = auth()->id();
            $totalAmount = $request->input('amount');

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

    public function showPaymentCompleted(Request $request)
    {
        $userId = auth()->id(); // Get the currently authenticated user's ID
        $cartItems = DB::table('cart')->where('user_id', $userId)->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->item_price * $item->quantity;
        });

        $taxes = 15; // Example tax value
        $deliveryFee = 10; // Example delivery fee
        $total = $subtotal + $taxes + $deliveryFee;

        // Pass order ID to the view
        $orderId = $request->query('orderId'); // Retrieve the order ID from the URL

        // Clear cart items after successful payment
        DB::table('cart')->where('user_id', $userId)->delete();

        // Pass data to the view
        return view('Manage Payment.PaymentCompletedPage', compact('cartItems', 'subtotal', 'taxes', 'deliveryFee', 'total', 'orderId'));
    }
}
