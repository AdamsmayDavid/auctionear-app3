<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\auctions;
use App\Models\autos;

class HomeController extends Controller
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
    public function index()
    {
        $autos = autos::all();
        return view('home', compact('autos'));
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sellerHome()
    {
        $autos = autos::all();
        return view('home', compact('autos'));
    }

    public function auctionPage(Request $request)
    {
        $auctions = auctions::where('auto_id', $request->type)->get();
        $auto_type = autos::where('id', $request->type)->first('auto_type');
        $autos = autos::all();

        return view('auctionPage', compact('auctions', 'autos', 'auto_type'));
    }

    public function createAuction()
    {
        $autos = autos::all();

        return view('createAuction', compact('autos'));
    }
    public function chats()
    {
        $autos = autos::all();

        return view('chats', compact('autos'));
    }
}