<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\auctions;
use App\Models\autos;
use App\Models\conversations;
use App\Models\messages;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

// use Illuminate\Support\Facades\Crypt;
// use Illuminate\Contracts\Encryption\DecryptException;

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
        $autos = autos::all();

        $theseUsers = User::where('type', 0)->orWhere('type', 2)->get(); 
        $users = array();

        foreach ($theseUsers as $user) 
        {
            if($user->status == '1' && ($user->user_type == 0 || $user->user_type == 1))
            {
                $users[] = $user;
            }
            //$user->delete();
        }

        return view('adminHome', compact('autos', 'users'));
    }
    public function banUser(Request $request)
    {
        //when admin banned the User, it will bring back the user status to 0 on the database
        // it can then be activated again on the Activate user page
        $banUser = User::where("id", $request->id)->update(['status' => '0']);

        return redirect()->back()->with("success","Banned User");
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

        $theseUsers = User::where('type', 0)->orWhere('type', 1)->get(); 
        $users = array();
        foreach ($theseUsers as $user) 
        {
            if($user->status == '0' && ($user->user_type == 0 || $user->user_type == 1))
            {
                $users[] = $user;
            }
            //$user->delete();
        }

        return view('activateUsers', compact('autos', 'users'));
    }
    public function activate(Request $request)
    {
        //when the admin activate the user it will change the user status to 1 on the database
        $activateUser = User::where("id", $request->id)->update(['status' => '1']);


         //SMS
       
         $userAct = User::where('id', $request->id)->value('phone');
         //dd($userAct);
 
 
 
          // Initialize Guzzle client
          $client = new Client();
 
          // Specify API key directly
          $apiKey = 'H6a46D1fu7sWpSUiBkoZuFJZKpGQXNBhMpoTmm5cRAPEWDHHvTb_X2mVU45qM_Cr';
  
          // Send HTTP POST request to send SMS
          try {
 
              $response2 = $client->request('POST', 'https://api.httpsms.com/v1/messages/send', [
                 'headers' => [
                     'x-api-key' => $apiKey,
                 ],
                 'json' => [
                     'content' => "Your account is Activated. \n\nYou can now login your account \nand place your bid/s at auctionear(dot)shop",
                     'from' => "+639916406021",
                     'to' => '+63'.$userAct
                 ]
             ]);
  
             //  $body = $response->getBody()->getContents();
  
             //  return $body; // or process the response as needed
          } catch (\GuzzleHttp\Exception\RequestException $e) {
              // Handle request exceptions (e.g., connection error, server error)
              return $e->getMessage();
          }
 

          

        return redirect()->back()->with("success","User Activated");
    }
    public function rejectUser(Request $request)
    {
        //when the admin rejects the request, the data will be delete on the database 
        //so that user can resubmit request
        $deleteUser = User::where("id", $request->id)->delete();

        return redirect()->back()->with("success","User rejection");
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
    // feedback
    public function userFeedback()
    {

        return view('userFeedback');
    }
    //feddback end
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

    
// public function encrypt(){
//     $encrypted = Crypt::encryptString('hsahahha'); 
//     dd($encrypted);
// }

// public function decrypt(){
//     $encryptedValue = 'eyJpdiI6IkoreHR5bDNtbmNHR2tKVjRmYitGVHc9PSIsInZhbHVlIjoiY2l6dXVXNllGNDgvcVBiblRaT0VkZz09IiwibWFjIjoiNjJhNjQ0OWEyYzMyMTBjNTJiYTM1ZThmMWI5MDUyOTQ5YTY4NThmNTc5OWFjZjMwZjQ4MWQ4NzA5ZDFlYjY1NSIsInRhZyI6IiJ9';
//     $decrypted = Crypt::decryptString($encryptedValue); 
//     dd($decrypted);
// }

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
