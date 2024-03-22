<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class smscontroller extends Controller
{
    public function send_sms()
    {
        // Your SMS sending logic goes here
        // Use the Vonage SDK or any other SMS service provider

        // Example using Vonage
        $basic  = new \Vonage\Client\Credentials\Basic('5c423a82', '417LKk8ppaU52uZi');
        $client = new \Vonage\Client($basic);

        // Set the CA bundle path for Guzzle with a relative path
        $guzzleClient = new \GuzzleHttp\Client([
            'verify' => storage_path('cacert.pem'),
        ]);
                    $client->setHttpClient($guzzleClient);

                $message = $client->sms()->send(
                    new \Vonage\SMS\Message\SMS("+639157318514", "YOUR TEXT", 'YOUR TEXT')
                );

                // Return a response
                return response()->json(['message' => 'SMS sent successfully']);
            }

}
