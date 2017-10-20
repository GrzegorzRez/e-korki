<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Socialite;
//use Illuminate\Contracts\Auth\Authenticatable;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

     /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        
        $findUser = User::where('email',$user->email)->first();

       if($findUser)
       {
            Auth::login($findUser);
            return view('index');
        
       }
       else
       { 
            $nameandsurname = explode(" ",$user->getName());
            $newuser = new User;

            $newuser->name = $nameandsurname['0'];
            $newuser->surname = $nameandsurname['1'];
            $newuser->email = $user->getEmail();
            $newuser->password = $user->token;
            $newuser->description = "";
            $newuser->location = "";
            $newuser->avatar = $user->getAvatar();

            $newuser->save();

            Auth::login($user);
            return view('index'); 
        }

        
    }

}
