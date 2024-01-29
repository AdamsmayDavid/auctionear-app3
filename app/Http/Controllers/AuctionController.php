<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\auctions;
use App\Models\autos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;


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
                'auc_date' => 'required',
                'auc_time' => 'required',
                'auc_image' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',
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
                'user_id' => $user['id'],
                'auction_date' => $auc_date,
                'auction_time' => $auc_time,
                'auctionImage' => $AutoImgLoc,
                // 'status' => 'active',
                // 'end_time' => Carbon::now()->addHours(6), //addMinutes(1) or addHours(6)
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
        $autos = autos::all();
        $auction = auctions::where('auction_id', $request->auction_id)->first('auction_id');

        $auto_type = autos::where('id', $request->type)->first('auto_type');

        return view('biddingPage', compact('autos', 'auction'));
    }
 
}
