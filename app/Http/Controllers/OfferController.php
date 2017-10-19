<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Offer;
use App\User;
use Illuminate\Support\Facades\Auth;

class OfferController extends Controller
{
	public function index(){
		$categories = Category::all();
		$offers = Offer::where(function($query)
		{

            $name = Input::has('name')? Input::get('name'):null;
            $category_id = Input::has('category_id')? Input::get('category_id'):null;
			$price_min = Input::has('price_min')? Input::get('price_min'):null;
			$price_max = Input::has('price_max')? Input::get('price_max'):null;
			$location = Input::has('location')? Input::get('location'):null;
			$online = Input::has('online')? Input::get('online'):null;
			$teacher_home = Input::has('teacher_home')? Input::get('teacher_home'):null;
            $student_home = Input::has('student_home')? Input::get('student_home'):null;

			if(isset($price_min))
			{ 
				$query->where('price_per_hour','>=', $price_min);
			}
            if(isset($category_id))
            {
                $query->where('category_id', $category_id);
            }
			if(isset($price_max))
			{
				$query->where('price_per_hour', '<=', $price_max);
			}
			if(isset($name))
			{
                $query->where('name', 'like', "%{$name}%")->orWhere(function ($query) use ($name) {
                    $query->whereHas('tags', function ($query) use ($name) {
                        $query->where(function ($query) use ($name) {
                            $query->orWhere('tags.name', 'like', "%{$name}%");
                        });
                    });
                });
			}
			if(isset($location))
			{
				$query->where('name', 'like', "%{$location}%");
			}
			if ($online)
			{
				 $query->where('online', '=', true);
			}
			if ($teacher_home)
			{
				 $query->where('teacher_home', '=', true);
			}
			if ($student_home)
			{
				 $query->where('student_home', '=', true);
			}

		})->orderBy('created_at','desc') -> Paginate(10);
		return view('offers.index')->with('offers',$offers)->with('categories', $categories);
	}

	public function add(){
	    $categories = Category::all();
		return view('offers.add')->with('categories',$categories);
	}

	public function store(Request $request){
	    $offer = new Offer($request->all());
        $offer->user_id = Auth::id();
        $offer->online = $request->has('online');
        $offer->teacher_home = $request->has('teacher_home');
        $offer->student_home = $request->has('student_home');
        $offer->save();
        return redirect(route('offers.index'));
	}

}
