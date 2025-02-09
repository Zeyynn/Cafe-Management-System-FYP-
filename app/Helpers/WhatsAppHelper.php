<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class WhatsAppHelper
{
    public static function sendMessage($phoneNumber, $message)
    {
        $url = env('WHATSAPP_API_URL') . env('WHATSAPP_PHONE_ID') . "/messages";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('WHATSAPP_ACCESS_TOKEN'),
            'Content-Type'  => 'application/json',
        ])->post($url, [
            'messaging_product' => 'whatsapp',
            'recipient_type'    => 'individual',
            'to'                => $phoneNumber,
            'type'              => 'text',
            'text'              => ['body' => $message],
        ]);

        return $response->json();
    }
}
