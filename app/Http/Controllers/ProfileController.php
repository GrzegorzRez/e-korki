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

	public function edit()
	{
		$user = Auth::user();
		return view('/profile/edit')->with('user',$user);
	}

	public function store(Request $request)
	{
		User::update($request->all());
		return redirect('profile');
	}
}
