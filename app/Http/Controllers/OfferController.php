<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Offer;
use App\User;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
	public function index(){
		$offers = Offer::where(function($query)
		{
			$price_min = Input::has('price_min')? Input::get('price_min'):null;
			$price_max = Input::has('price_max')? Input::get('price_max'):null;
			$location = Input::has('location')? Input::get('location'):null;
			$online = Input::has('online')? Input::get('online'):null;
			//$teacher_home = Input::has('teacher_home')? Input::get('teacher_home'):null;
			//$student_home = Input::has('student_home')? Input::get('student_home'):null;
			$name = Input::has('name')? Input::get('name'):null;

			if(isset($price_min))
			{ 
				$query->where('price_per_hour','>=', $price_min);
			}
			if(isset($price_max))
			{
				$query->where('price_per_hour', '<=', $price_max);
			}
			if(isset($name))
			{
				$query->where('name', $name);
			}
			if(isset($location))
			{
				$query->where('location', $location);
			}
			if ($online)
			{
				 $query->where('online', '=', 1);
			}



		}) -> Paginate(10);
		return view('offers.index')->with('offers',$offers);
	}

	public function add(){
		return view('offers.add');
	}

	public function store(Request $request){
	    $offer = new Offer($request->all());
        $offer->user_id = Auth::id();
        $offer->save();
        return redirect(route('offers.index'));
	}

}
