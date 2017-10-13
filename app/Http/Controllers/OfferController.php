<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Offer;

class OfferController extends Controller
{
	public function index(){
		$offers = Offer::all();
		return view('offer')->with('offers',$offers);
	}

	public function add(){
		return view('offer/add');
	}

	public function store(Request $request){
		return Offer::create($request->all());
	}
    
}
