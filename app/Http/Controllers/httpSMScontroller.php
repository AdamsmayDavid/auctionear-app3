<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HttpSMSController extends Controller
{
    public function sendhttp(Request $request)
    {
        // Initialize Guzzle client
        $client = new Client();

        // Specify API key directly
        $apiKey = 'H6a46D1fu7sWpSUiBkoZuFJZKpGQXNBhMpoTmm5cRAPEWDHHvTb_X2mVU45qM_Cr';

        // Send HTTP POST request to send SMS
        try {
            $response = $client->request('POST', 'https://api.httpsms.com/v1/messages/send', [
                'headers' => [
                    'x-api-key' => $apiKey,
                ],
                'json' => [
                    'content' => 'Defended',
                    'from' => "+639916406021",
                    'to' => '+639157318514'
                ]
            ]);

            $body = $response->getBody()->getContents();

            return $body; // or process the response as needed
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle request exceptions (e.g., connection error, server error)
            return $e->getMessage();
        }
    }
}
