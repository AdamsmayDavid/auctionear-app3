<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\bidSocket;
use App\Events\PrivateWebSocket;
use App\Events\messageSocket;
use App\Models\messages;
use App\Models\conversations;
use Illuminate\Support\Facades\Auth;

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
        $sender = $request->sender;
        $channel = $request->channel;

        //$user = Auth::user();
        // $user1 = conversations::where('con_id', $channel)->first('user_two');
        // $user2 = conversations::where('con_id', $channel)->first('user_one');

        // $messages = messages::create(
        //     [
        //     'con_id' => $channel,
        //     'content' => $message,
        //     'sender_id' => $user1,
        //     'receiver_id' => $user2,
        //     ],
        // );

        event(new messageSocket($message, $sender, $channel));


    }
}
