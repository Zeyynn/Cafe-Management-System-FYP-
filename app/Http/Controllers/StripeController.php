<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET')); // Set your Stripe secret key

        try {
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'myr', // Malaysian Ringgit
                        'product_data' => [
                            'name' => 'Your Order',
                        ],
                        'unit_amount' => 18500, // Amount in cents (RM185.00 = 18500)
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => url('/success'), // Redirect after success
                'cancel_url' => url('/cancel'),   // Redirect after cancel
            ]);

            return response()->json(['id' => $session->id]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}