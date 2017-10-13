<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProfileController extends Controller
{
	public function profile($id)
    {
    	$user = User::find($id);
    	return view('profile')->with('user', $user);
	}
}
