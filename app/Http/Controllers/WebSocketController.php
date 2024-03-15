<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\bidSocket;
use App\Events\PrivateWebSocket;
use App\Events\messageSocket;
use App\Models\messages;
use App\Models\conversations;
use Illuminate\Support\Facades\Auth;


use App\Events\demandBids_send;
use App\Models\auctions;
use App\Models\crops;
use App\Models\demandAuctions;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Database\QueryException;

use App\Events\NewMessageEvent;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\DB;
use App\Models\bids;
use App\Models\demand_bids;
use App\Services\ValidationService; // Import the ValidationService



class WebSocketController extends Controller
{
    public function send_bid(Request $request)
    {
        $bid_price = $request->message;
        $bidder = $request->bidder;
        $channel = $request->channel;


        $website_info = bids::where([
            ['bid_amount', '=' ,$bid_price],
            ['auction_id', '=', $channel]
        ])->first();

        $bids = bids::where('auction_id', $channel)->get();
        $bid_max = $bids->max('bid_amount');
        
        $base_price = auctions::where('auction_id', $channel)->first('starting_price');
        $auto_type = auctions::where('auction_id', $channel)->first('auto_id');

        if ($website_info != null || $bid_price <= $bid_max || $bid_price <= $base_price->starting_price) 
        {
            return response()->json([0]);
        } else {
            
            $user = Auth::user();
            $now = Carbon::now();
            $on_time = Carbon::parse($now)->format('g:i A');
            
            //return response()->json([$bid_price, $bidder, $channel, $user['id'], $on_time]);



                $bids = bids::create(
                [
                'bid_amount' => $bid_price,
                'bidder_id' => $user['id'],
                'auction_id' => $channel,
                'auto_type' => $auto_type->auto_id,
                'on_time' => $on_time,
                ],
            );
            //return ['status' => 'Message Sent!'];
            if($bids)
            {
		        //event(new NewMessageEvent($message, $channel, $user['name'], $profile_img, $on_time));
                event(new bidSocket($bid_price, $bidder, $channel));
              
		        return response()->json([$bid_price => true]);
	
            }
            else
            {
                return response()->json(['Bid Not Sent' => true]);
            }
    

            
        }
       
            

        //event(new bidSocket($bid_price, $bidder, $channel));

    }

    public function send_message(Request $request)
    {
        $message = $request->message;
        $sender = $request->sender;
        $channel = $request->channel;

        $user1 = conversations::where('con_id', $channel)
                              ->where('user_one', $sender)->first('user_one');

        $user2 = conversations::where('con_id', $channel)
                              ->where('user_two', $sender)->first('user_two');

        if($user1 != null)
        {
        $user2 = conversations::where('con_id', $channel)
                              ->where('user_one', $sender)->first('user_two');
        $messages = messages::create(
            [
            'con_id' => $channel,
            'content' => $message,
            'sender_id' => $user1->user_one,
            'receiver_id' => $user2->user_two,
            ],
        );

        }
        elseif($user2 != null)
        {
        $user1 = conversations::where('con_id', $channel)
                              ->where('user_two', $sender)->first('user_one');
        $messages = messages::create(
            [
            'con_id' => $channel,
            'content' => $message,
            'sender_id' => $user2->user_two,
            'receiver_id' => $user1->user_one,
            ],
        );

        }

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
