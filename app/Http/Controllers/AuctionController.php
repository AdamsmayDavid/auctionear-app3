<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\auctions;
use App\Models\autos;
use App\Models\bids;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\conversations;


class AuctionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function newAuction(Request $request)
    {
        if($request->hasFile("auc_image"))
        {
            $request->validate([
                'auto_id' => 'required',
                'description' => 'required',
                'starting_price' => 'required',
                //'auc_date' => 'required',
                //'auc_time' => 'required',
                'auc_image' => 'required', //|image|mimes:jpeg,jpg,png,gif,svg|max:2048
            ]);

            $auto_id = $request->auto_id;
            $description = $request->description;
            $starting_price = $request->starting_price;
            $auc_date = $request->auc_date;
            $auc_time = $request->auc_time;
            $user = Auth::user();
            $dateNow = time();
    
            $AutoImgLoc = 'auction_'.$dateNow.'_'.$auto_id.'.'.$request['auc_image']->extension();
    
            $request->auc_image->move(public_path('images/auctions'), $AutoImgLoc);
            
            $new_auction = auctions::create([
                'auto_id' => $auto_id,
                'description' => $description,
                'starting_price' => $starting_price,
                'creator_id' => $user['id'],
                //'auction_date' => $auc_date,
                //'auction_time' => $auc_time,
                'auctionImage' => $AutoImgLoc,
                'status' => 'active',
                'end_time' => Carbon::now()->addHours(24), //addMinutes(1) or addHours(6)
            ]);

            return redirect()->back()->withSuccess('Upload image successful')
            ->with('success', 'New Auction has been added');
        }
        else
        {
            return redirect()->back()->withFailed('failed', 'Please provide an Image for the Auction');
        }

    }

    public function biddingPage(Request $request)
    {
        $user1 = conversations::where('con_id', 1)
                              ->where('user_one', 1)->first('user_one');

        $user2 = conversations::where('con_id', 1)
                              ->where('user_two', 1)->first('user_two');
        // dd($user1, $user2->user_two);
        $on_auction = $request->input('auction_id');
        $autos = autos::all();


        $auctionData = auctions::select(
            'auctions.auction_id',
            'auctions.starting_price',
            //'auctions.end_time',
            //'auctions.crop_name',
            'auctions.status',
            'auctions.creator_id', //'auctions.creator_id',
            'bids.on_time',
            'users.name as creator_name',
            'auctions.auto_id',
            'auctions.auctionImage',
            'bids.bid_amount',
            DB::raw('COALESCE(MAX(bids.bid_amount), auctions.starting_price) as latest_bid_price')
        )
        ->join('users', 'auctions.creator_id', '=', 'users.id')
            ->leftJoin('bids', 'auctions.auction_id', '=', 'bids.auction_id')
            ->where('auctions.auction_id', $on_auction)
            ->groupBy(
                        'auctions.auction_id',  
                        'auctions.starting_price',  
                        'auctions.status',
                        'auctions.creator_id',
                        'bids.on_time',
                        'users.name', 
                        //'users.profile_img',
                        'auctions.auto_id', 
                        'bids.bid_amount',
                        'auctions.end_time',
                        'auctions.auctionImage',
                    )
            ->get();

            $bids = bids::select('bids.bid_id', 'users.name', 'bids.bid_amount', 'bids.on_time')
            ->join('users', 'bids.bidder_id', '=', 'users.id')
            ->where('bids.auction_id', $on_auction)
            ->orderBy('bid_amount', 'asc')
            ->get();

            return view('biddingPage', compact('auctionData', 'bids', 'autos'))->with('success', 'highest bid fetched');


    }

    public function manual_close(Request $request)
    {
        $thisAuction_id = $request->input('auction_id');

        $openAuctions = auctions::where('auction_id', $thisAuction_id)->first();

        $close_auction = auctions::where('auction_id', $thisAuction_id)->update(['status' => 'closed']);

         $bidder_list = bids::orderBy('bid_amount', 'DESC')->where('auction_id', $thisAuction_id)->first();
         $bidder = $bidder_list->bidder_id;

         $seller = auctions::where('auction_id', $thisAuction_id)->first('creator_id');

         $creat_convo = conversations::create([
                 'user_one' => $seller->creator_id,
                 'user_two' => $bidder,
            ]);



        if($close_auction && $creat_convo)
        {
            return back(); //->with('closed', 'Auction is now closed');
        }
        return back(); //->with('active', 'Failed to close');
        

        //------------------Working--------------
        // $thesebids = bids::where('auction_id', $thisAuction_id)->get();
        
        // $bidders = bids::where('auction_id', $thisAuction_id)->pluck('bidder_id');
        // $farmer = auctions::where('auction_id', $thisAuction_id)->pluck('creator_id');
        
        // //$toNotify = $bidders->merge($farmer)->unique();
        // $toNotify = $bidders->merge($farmer)->unique()->toArray();

        // $user = User::whereIn('id', $toNotify)->get();
        //-------------------Working----------------
        

        //------------------Not working---------------
        //     foreach($thesebids as $bid)
        //     {
        //         $auction_id = $openAuctions->auction_id;
        //         $crop_id = $openAuctions->crop_id;
        //         $creator_id = $openAuctions->user_id;
        //         $bidder_id =  $bid->user_id;    
        //         $phase = 1;      
      
        //     }
        //     farmerNotif::create([
        //         'auction_id' => $auction_id,
        //         'crop_id' => $crop_id,
        //         'creator_id' => $creator_id,
        //     ]); 
            
        //     consNotif::create([
        //         'auction_id' => $auction_id,
        //         'crop_id' => $crop_id,
        //         'bidder_id' => $bidder_id,
        //     ]);

        //     //send notification on websocket
        //     event(new notifier($auction_id, $crop_id, $creator_id, $bidder_id ));
        //     event(new end_auction($auction_id, $crop_id, $creator_id, $bidder_id ));

        //     //save the notifiaction on database
        //     Notification::send($user, new UserNotification($auction_id, $creator_id, $bidder_id, $phase));

        // if($close_auction)
        // {
        //     return back()->with('closed', 'Auction is now closed');
        // }
        // return back()->with('active', 'Failed to close');
        //-----------------------Not working-------------------
        

        
    }
    

 
}
