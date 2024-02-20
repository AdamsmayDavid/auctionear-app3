<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\auctions;
use App\Models\autos;
use App\Models\conversations;
use App\Models\messages;
use Illuminate\Support\Facades\Auth;

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

    public function waitingUser()
    {
        return view('waitingUser');
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

    public function activateUsers()
    {
        $autos = autos::all();
        return view('activateUsers', compact('autos'));
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

        $user = Auth::id();

        $conversations = conversations::where('user_one', $user)
                                        ->orwhere('user_two', $user)->get();

        $messages = messages::where('sender_id', $user)
                              ->orwhere('receiver_id', $user)->get();
        // $conversations = conversations::select(
        //                                         'conversations.con_id', 
        //                                         'conversations.user_one', 
        //                                         'conversations.user_two', 
        //                                         'users.name', 
        //                                       )
                                              
        // ->join('users', 'conversations.con_id', '=', 'users.id')
        // ->where('conversations.user_one', $my_conversations)
        // ->orwhere('conversations.user_two', $my_conversations)
        // ->get();
        // //dd($conversations);

        // $messages = messages::select(
        //                               'messages.con_id',
        //                               'messages.content', 
        //                               'messages.sender_id', 
        //                               'messages.receiver_id'
        //                             )
        // ->join('messages', 'messages.con_id', '=', 'conversations.con_id')
        // ->where('messages.sender_id', $my_conversations)
        // ->orwhere('messages.receiver_id', $my_conversations)
        // ->orderBy('message_id', 'desc')
        // ->get();
        // //dd($messages);
        

        return view('chats', compact('autos', 'conversations', 'messages'));
    }
}

/*

SELECT
  `conversations`.`con_id`,
  `conversations`.`user_one`,
  `conversations`.`user_two`,
  `users`.`name`,
  `messages`.`con_id`
FROM
  `conversations`
  INNER JOIN `users` ON `conversations`.`con_id` = `users`.`id`
  INNER JOIN `messages` ON `messsages`.`message_id` = `messages`.`message_id`
WHERE
  `conversations`.`user_one` = 2
  OR `conversations`.`user_two` = 2

  */