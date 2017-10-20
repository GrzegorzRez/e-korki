<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Socialite;
use Intervention\Image\Image;
use Illuminate\Contracts\Auth\Authenticatable;

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
        $facebookUserInformation = Socialite::driver('facebook')->fields([
            'first_name', 'last_name', 'email'
        ])->scopes([
            'email'
        ])->stateless()->user();

        //dd($facebookUserInformation);

        $user = User::where('email',$facebookUserInformation->email)->first();

        //dd($user);

       if($user)
       {
            Auth::login($user);
            return view('index');
       }
       else
       {
            $newuser = new User;

            $newuser->name = $facebookUserInformation->user['first_name'];
            $newuser->surname = $facebookUserInformation->user['last_name'];
            $newuser->email = $facebookUserInformation->email;
            $newuser->password = $facebookUserInformation->token;
            $newuser->description = "";
            $newuser->location = "";
            $newuser->phone = 111111111;
            $newuser->save();
           $filename = $newuser->id.'.jpg';
           //copy($facebookUserInformation->avatar,'uploads/avatars/'.$filename);
           copy('https://graph.facebook.com/'.$facebookUserInformation->id.'/picture?width=300','uploads/avatars/'.$filename);
           $newuser->avatar = $filename;
           $newuser->save();

            Auth::login($newuser);
        }
        return view('index');


    }

}
