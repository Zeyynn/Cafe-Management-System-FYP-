<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WhatsAppWebhookController extends Controller
{
    public function handle(Request $request)
    {
        Log::info('WhatsApp Webhook Received:', $request->all());

        // Verify token for Meta webhook setup
        if ($request->has('hub_mode') && $request->input('hub_mode') === 'subscribe') {
            return response($request->input('hub_challenge'), 200);
        }

        // Process incoming WhatsApp messages or notifications
        $data = $request->all();
        Log::info('WhatsApp Webhook Data:', $data);

        return response()->json(['status' => 'success']);
    }
}
