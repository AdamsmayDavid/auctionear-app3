<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\auctions;
use App\Models\bids;
use App\Models\User;
use App\Models\conversations;
use Carbon\Carbon;
use GuzzleHttp\Client;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('fetch:auctions', function () {

    $openAuctions = auctions::where('status', 'active')->first();
 

    // foreach ($openAuctions as $auction) {

  
        $now = now()->toDateTimeString();
        
        if($openAuctions->end_time <= $now)
        {
            $closeAuction = auctions::where('auction_id', $openAuctions->auction_id)->update(['status' => 'closed']);
            // $closeAuction = auctions::where('end_time', '<=', $now)->update(['status' => 'closed']);

            // if (!$closeAuction) {
            //     return back()->with('error', 'Failed to close the auction');
            // }
            // Fetch the highest bidder for the auction
            $bidder = bids::orderBy('bid_amount', 'DESC')
                        ->where('auction_id', $openAuctions->auction_id)
                        ->value('bidder_id');
                         // Fetch the seller ID
            $sellerId = auctions::where('auction_id', $openAuctions->auction_id)->value('creator_id');
            //-------Get winner
            $winnerPhone = User::where('id', $bidder)->value('phone');
    
            // Create conversation between seller and highest bidder
            $createConversation = conversations::create([
                'user_one' => $sellerId,
                'user_two' => $bidder,
            ]);
            // $closeAuction = auctions::where('auction_id', $openAuctions->auction_id)->update(['status' => 'closed']);

            // if (!$closeAuction) {
            //     return back()->with('error', 'Failed to close the auction');
            // }
    
            //SMS rem start
    

                   // Fetch all bidders
            $bidders = bids::where('auction_id', $openAuctions->auction_id)->distinct()->pluck('bidder_id');

            foreach($bidders as $bidder)
            {
                $user = User::where('id', $bidder)->first();
    
                // If user exists, store their ID and phone number
                if ($user) {
                    $bidderDetails[] = [
                        'id' => $bidder,
                        'phone' => $user->phone,
                    ];
                }
            }
    
            // Dump the details of all bidders (including their IDs and phone numbers)
           // dd($bidderDetails);         
            //SMS
           
            $sellerPhone = User::where('id', $sellerId)->value('phone');
            //dd($sellerPhone);
    
             // Initialize Guzzle client
             $client = new Client();
             // Specify API key directly
             $apiKey = 'H6a46D1fu7sWpSUiBkoZuFJZKpGQXNBhMpoTmm5cRAPEWDHHvTb_X2mVU45qM_Cr';
             // Send HTTP POST request to send SMS
             try {       
                foreach ($bidderDetails as $aucBidder) {
                    if ($winnerPhone == $aucBidder['phone']) {
                        //dd($winnerPhone.' '.$aucBidder['phone']);
                       // dd($winnerPhone);
    
                        // Send winner message
                        $response = $client->request('POST', 'https://api.httpsms.com/v1/messages/send', [
                            'headers' => [
                                'x-api-key' => $apiKey,
                            ],
                            'json' => [
                                'content' => 'Congratulations! You won the Auction. Please go to Message to communicate with the auctioneer',
                                'from' => "+639916406021",
                                'to' => '+63'.$winnerPhone
                            ]
                        ]);
                    } else {
                        // Send loser message
                        $response = $client->request('POST', 'https://api.httpsms.com/v1/messages/send', [
                            'headers' => [
                                'x-api-key' => $apiKey,
                            ],
                            'json' => [
                                'content' => 'You lost the Auction',
                                'from' => "+639916406021",
                                'to' => '+63'.$aucBidder['phone']
                            ]
                        ]);
                    }
                }
                    
                 $response2 = $client->request('POST', 'https://api.httpsms.com/v1/messages/send', [
                    'headers' => [
                        'x-api-key' => $apiKey,
                    ],
                    'json' => [
                        'content' => 'Your Auction Ended',
                        'from' => "+639916406021",
                        'to' => '+63'.$sellerPhone
                    ]
                ]);
     
                //  $body = $response->getBody()->getContents();
     
                //  return $body; // or process the response as needed
             } catch (\GuzzleHttp\Exception\RequestException $e) {
                 // Handle request exceptions (e.g., connection error, server error)
                 return $e->getMessage();
             }

         
             //SMS end here
    
            // if ($createConversation) {
            //     return back()->with('success', 'Auction is now closed');
            // } else {
            //     return back()->with('error', 'Failed to create conversation');
            // }

            // $thesebids = bids::where('auction_id', $auction->auction_id)->get();
            
            // foreach($thesebids as $bid)
            // {
            //     $auction_id = $auction->auction_id;
            //     $auto_id = $auction->auto_id;
            //     $creator_id = $auction->creator_id;
            //     $bidder_id =  $bid->user_id;
                
                         

            // }

        // }

    }
    

})->purpose('Fetch all ended auctions on the database');




// public function manual_close(Request $request)
//     {
//         $thisAuctionId = $request->input('auction_id');

//         // Find and update the auction status to closed
//         $closeAuction = auctions::where('auction_id', $thisAuctionId)->update(['status' => 'closed']);

//         if (!$closeAuction) {
//             return back()->with('error', 'Failed to close the auction');
//         }
//         // Fetch the highest bidder for the auction
//         $bidder = bids::orderBy('bid_amount', 'DESC')
//                     ->where('auction_id', $thisAuctionId)
//                     ->value('bidder_id');
//                      // Fetch the seller ID
//         $sellerId = auctions::where('auction_id', $thisAuctionId)->value('creator_id');
//         //-------Get winner
//         $winnerPhone = User::where('id', $bidder)->value('phone');

//         // Create conversation between seller and highest bidder
//         $createConversation = conversations::create([
//             'user_one' => $sellerId,
//             'user_two' => $bidder,
//         ]);

//         //SMS rem start

     
//          //SMS end here

//         if ($createConversation) {
//             return back()->with('success', 'Auction is now closed');
//         } else {
//             return back()->with('error', 'Failed to create conversation');
//         }
//     }



        //     // Fetch all bidders
        //     $bidders = bids::where('auction_id', $thisAuctionId)->distinct()->pluck('bidder_id');

        //     foreach($bidders as $bidder)
        //     {
        //         $user = User::where('id', $bidder)->first();
    
        //         // If user exists, store their ID and phone number
        //         if ($user) {
        //             $bidderDetails[] = [
        //                 'id' => $bidder,
        //                 'phone' => $user->phone,
        //             ];
        //         }
        //     }
    
        //     // Dump the details of all bidders (including their IDs and phone numbers)
        //    // dd($bidderDetails);         
        //     //SMS
           
        //     $sellerPhone = User::where('id', $sellerId)->value('phone');
        //     //dd($sellerPhone);
    
        //      // Initialize Guzzle client
        //      $client = new Client();
        //      // Specify API key directly
        //      $apiKey = 'H6a46D1fu7sWpSUiBkoZuFJZKpGQXNBhMpoTmm5cRAPEWDHHvTb_X2mVU45qM_Cr';
        //      // Send HTTP POST request to send SMS
        //      try {       
        //         foreach ($bidderDetails as $aucBidder) {
        //             if ($winnerPhone == $aucBidder['phone']) {
        //                 //dd($winnerPhone.' '.$aucBidder['phone']);
        //                // dd($winnerPhone);
    
        //                 // Send winner message
        //                 $response = $client->request('POST', 'https://api.httpsms.com/v1/messages/send', [
        //                     'headers' => [
        //                         'x-api-key' => $apiKey,
        //                     ],
        //                     'json' => [
        //                         'content' => 'Congratulations! You won the Auction. Please go to Message to communicate with the auctioneer',
        //                         'from' => "+639916406021",
        //                         'to' => '+63'.$winnerPhone
        //                     ]
        //                 ]);
        //             } else {
        //                 // Send loser message
        //                 $response = $client->request('POST', 'https://api.httpsms.com/v1/messages/send', [
        //                     'headers' => [
        //                         'x-api-key' => $apiKey,
        //                     ],
        //                     'json' => [
        //                         'content' => 'You lost the Auction',
        //                         'from' => "+639916406021",
        //                         'to' => '+63'.$aucBidder['phone']
        //                     ]
        //                 ]);
        //             }
        //         }
                    
        //          $response2 = $client->request('POST', 'https://api.httpsms.com/v1/messages/send', [
        //             'headers' => [
        //                 'x-api-key' => $apiKey,
        //             ],
        //             'json' => [
        //                 'content' => 'Your Auction Ended',
        //                 'from' => "+639916406021",
        //                 'to' => '+63'.$sellerPhone
        //             ]
        //         ]);
     
        //         //  $body = $response->getBody()->getContents();
     
        //         //  return $body; // or process the response as needed
        //      } catch (\GuzzleHttp\Exception\RequestException $e) {
        //          // Handle request exceptions (e.g., connection error, server error)
        //          return $e->getMessage();
        //      }

