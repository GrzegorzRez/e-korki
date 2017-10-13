<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
	public function index(){
		return view('offer');
	}
    
}
