<?php
 
namespace App\Http\Controllers\Auth;
 
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
 
use Illuminate\Http\Request;
//deletables
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{
 
    use AuthenticatesUsers;
 
    protected $redirectTo = RouteServiceProvider::HOME;
 
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 
    public function login(Request $request)
    {   
        $input = $request->all();
       
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // $users = User::where($this->username(), $request->email)->where('status', '0')->first();
        
        // if ($users == null)
        // {
            if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'status' => 0)))
            {
                return view('auth.verify');
                // if (auth()->user()->type == 'admin') {
                //     return redirect()->route('admin.home');
                // }else if (auth()->user()->type == 'seller') {
                //     return redirect()->route('seller.home');
                // }else if (auth()->user()->type == 'user'){
                //     return redirect()->route('home');
                // }else{
                //     return back()->withErrors([
                //         'email' => 'Error! please try again',
                //     ])->onlyInput('email');
                // }
            }elseif(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'status' => 1))){
                
                if (auth()->user()->type == 'admin') {
                    return redirect()->route('admin.home');
                }else if (auth()->user()->type == 'seller') {
                    return redirect()->route('seller.home');
                }else if (auth()->user()->type == 'user'){
                    return redirect()->route('home');
                }else{
                    return back()->withErrors([
                        'email' => 'Error! please try again',
                    ])->onlyInput('email');
                }
                
                // return back()->withErrors([
                //     'email' => 'Incorrect Password or Email.',
                // ])->onlyInput('email');
            }
        // }
        // else
        // {
        //     return back()->withErrors([
        //         'email' => 'Your acoount is not activated yet',
        //     ])->onlyInput('email');
        // }

        
            
        /*
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.home');
            }else if (auth()->user()->type == 'seller') {
                return redirect()->route('seller.home');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }*/
    }
}