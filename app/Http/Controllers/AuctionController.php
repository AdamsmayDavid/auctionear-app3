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
        dd($user1, $user2->user_two);
        $on_auction = $request->input('auction_id');
        $autos = autos::all();


        $auctionData = auctions::select(
            'auctions.auction_id',
            'auctions.starting_price',
            //'auctions.end_time',
            //'auctions.crop_name',
            //'auctions.status',
            'auctions.creator_id', //'auctions.creator_id',
            'bids.on_time',
            'users.name as creator_name',
            'auctions.auto_id',
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
                    )
            ->get();

            $bids = bids::select('bids.bid_id', 'users.name', 'bids.bid_amount', 'bids.on_time')
            ->join('users', 'bids.bidder_id', '=', 'users.id')
            ->where('bids.auction_id', $on_auction)
            ->orderBy('bid_amount', 'asc')
            ->get();

            return view('biddingPage', compact('auctionData', 'bids', 'autos'))->with('success', 'highest bid fetched');






        // $autos = autos::all();

        // $on_auction = $request->auction_id;
        // $auction = auctions::where('auction_id', $on_auction)->first('auction_id');

        // $auto_type = autos::where('id', $request->type)->first('auto_type');
             
        // //new
        // $bids = bids::where('auction_id', $on_auction)->orderBy('bid_amount', 'desc')->get();




        /*
   
        public function selectAuction(Request $request)
    {
        $on_auction = $request->input('auction_id');


        $auctionData = demandAuctions::select(
            'demand_auctions.auction_id',
            'demand_auctions.crop_volume',
            'demand_auctions.starting_price',
            'demand_auctions.pick_up_date',
            'demand_auctions.end_time',
            //'demand_auctions.crop_name',
            'demand_auctions.starting_price',
            'demand_auctions.status',
            'demand_auctions.creator_id',
            'demand_bids.on_time',
            'users.name as creator_name',
            'users.profile_img',
            'demand_auctions.crop_name',
            'demand_bids.bid_amount',
            DB::raw('COALESCE(MAX(demand_bids.bid_amount), demand_auctions.starting_price) as latest_bid_price')
        )
            ->join('users', 'demand_auctions.creator_id', '=', 'users.id')
            ->leftJoin('demand_bids', 'demand_auctions.auction_id', '=', 'demand_bids.auction_id')
            ->where('demand_auctions.auction_id', $on_auction)
            ->groupBy(
                        'demand_auctions.auction_id', 
                        'demand_auctions.crop_volume', 
                        'demand_auctions.starting_price', 
                        'demand_auctions.pick_up_date', 
                        //'demand_auctions.crop_name',
                        'demand_auctions.starting_price',
                        'demand_auctions.status',
                        'demand_auctions.creator_id',
                        'demand_bids.on_time',
                        'users.name', 
                        'users.profile_img',
                        'demand_auctions.crop_name', 
                        'demand_bids.bid_amount',
                        'demand_auctions.end_time',
                    )
            ->get();

            $bids = demand_bids::select('demand_bids.bid_id', 'users.name', 'demand_bids.bid_amount','users.profile_img', 'demand_bids.on_time')
            ->join('users', 'demand_bids.bidder_id', '=', 'users.id')
            ->where('demand_bids.auction_id', $on_auction)
            ->orderBy('bid_amount', 'asc')
            ->get();

            return view('demandBidding', compact('auctionData', 'bids'))->with('success', 'highest bid fetched');







        /*
        $bids = demand_bids::select(
            'demand_bids.bid_id', 
            'demand_bids.crop_name', 
            'users.name', 
            'demand_bids.bid_amount',
            'users.profile_img', 
            'demand_bids.on_time'
            )
        ->join('users', 'demand_bids.bidder_id', '=', 'users.id')
        ->where('demand_bids.auction_id', $on_auction)
        ->orderBy('bid_amount', 'desc')
        ->get();

        $auctions = demandAuctions::where('auction_id', $on_auction)->get();
        $highestbid = demand_bids::where('auction_id', $on_auction)->get('bid_amount')->max();
        foreach($auctions as $auction)
        {
            $creator = User::where('id', $auction->user_id)->get();
            $crop = crops::where('crop_id', $auction->crop_id)->first();
        }
        return view('demandBidding', compact('bids','auctions', 'highestbid', 'creator', 'crop'))->with('success', 'highest bid fetched');
        */
    }
    

 
}
