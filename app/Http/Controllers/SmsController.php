<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SmsController extends Controller
{
    public function sendSms(Request $request)
    {
        // Initialize Guzzle client
        $client = new Client();

        // Make a POST request to the send API endpoint
        // $response = $client->post('https://auctionear.shop/api/send-sms', [
        //     'form_params' => [
        //         'message' => $request->input('message'),
        //         'number' => $request->input('number'),
        //         'messageId' => $request->input('messageId'),
        //         'deviceId' => 1, // Adjust deviceId as needed
        //         'action' => 'SEND',
        //     ]
        // ]);

         // Make a POST request to the send API endpoint
         $response = $client->post('https://auctionear.shop/api/send-sms', [
            'form_params' => [
                'message' => 'Hello World!',
                'number' => '+639157318514',
                'messageId' => 1,
                'deviceId' => 1, // Adjust deviceId as needed
                'action' => 'SEND',
            ]
        ]);

        // Process response if needed
        return $response->getBody()->getContents();
    }

    public function receiveSms(Request $request)
    {
        // Implement logic to process received SMS here
    }

    public function updateStatus(Request $request)
    {
        // Implement logic to update SMS status here
    }
}

