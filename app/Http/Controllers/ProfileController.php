<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
	public function profile($id)
    {
    	//return view('profile')->with('id', $id);
    	$elo = $id;
    	return view('profile');
	}
}
