<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Offer;
use Illuminate\Support\Facades\Auth;

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
	    $offer = new Offer($request->all());
        $offer->user_id = Auth::id();
        $offer->save();
        return redirect(route('offers.index'));
	}
    
}
