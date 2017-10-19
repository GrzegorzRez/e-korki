<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Laravel\Socialite\Facades\Socialite;

class FacebookLoginController extends Controller
{
    public function redirectToProvider()
	{
    return Socialite::with('facebook')->redirect();
	}

	public function handleProviderCallback()
	{
	dd(Socialite::with('facebook'));
    $user = Socialite::with('facebook')->user();
    User::create(['name'=>$user->getName(), 'email'=>$user->getEmail()]);//dupa
    //FB.getAuthResponse()
   
    // $user->token;
	}
}
