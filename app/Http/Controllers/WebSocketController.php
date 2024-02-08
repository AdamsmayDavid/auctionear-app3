<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\bidSocket;
use App\Events\PrivateWebSocket;
use App\Events\messageSocket;

class WebSocketController extends Controller
{
    public function send_bid(Request $request)
    {
        $bid_price = $request->message;
        $bidder = $request->bidder;
        $channel = $request->channel;

        event(new bidSocket($bid_price, $bidder, $channel));

    }

    public function send_message(Request $request)
    {
        $message = $request->message;
        $bidder = $request->bidder;
        $channel = $request->channel;

        event(new messageSocket($message, $bidder, $channel));


    }
}
