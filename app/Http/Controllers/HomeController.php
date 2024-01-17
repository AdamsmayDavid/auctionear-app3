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
        return view('sellerHome');
    }

    public function auctionPage()
    {
        $auctions = auctions::all();

        return view('auctionPage', compact('auctions'));
    }
}