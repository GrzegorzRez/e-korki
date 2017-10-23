<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\OfferRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Offer;
use App\Tag;
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
				$query->where('location', 'like', "%{$location}%");
			}
			if ($online OR $teacher_home OR $student_home)
			{
				$query->where(function($query) use ($online, $teacher_home, $student_home)
				{
					if ($online)
					{
						 $query->where('online', '=', true);
						 if($teacher_home)
						 {
						 	$query->orWhere('teacher_home', '=', true);
						 }
						 if($student_home)
						 {
						 	$query->orWhere('student_home', '=', true);
						 }
					}
					if ($teacher_home)
					{
						 $query->where('teacher_home', '=', true);
						 if($student_home)
						 {
						 	$query->orWhere('student_home', '=', true);
						 }
						 if($online)
						 {
						 	$query->orWhere('online', '=', true);
						 }
					}
					if ($student_home)
					{
						 $query->where('student_home', '=', true);
						 if($teacher_home)
						 {
						 	$query->orWhere('teacher_home', '=', true);
						 }
						 if($online)
						 {
						 	$query->orWhere('online', '=', true);
						 }
					}
				});
			
			}

		})->orderBy('created_at','desc') -> Paginate(10);
		return view('offers.index')
            ->with('offers',$offers)
            ->with('categories', $categories);
	}

    public function edit( Offer $offer ){
        if( $offer->user->id == Auth::id() ) {
            $categories = Category::all();
            $tags = array_pluck($offer->tags, 'name');
            $tagsString = '';
            foreach ($tags as $tag) {
                $tagsString .= $tag . ',';
            }
            return view('offers.edit')
                ->with('offer',$offer)
                ->with('categories', $categories)
                ->with('tags', $tagsString);
        }else{
            return redirect(route('offers.index'));
        }
    }

    public function show( $id ){
        $offer = Offer::find($id);
        return view('offers.show')->with('offer',$offer);
    }

	public function add(){
	    $categories = Category::all();
		return view('offers.add')->with('categories',$categories);
	}

	public function store(OfferRequest $request){
	    $offer = new Offer($request->all());
        $offer->user_id = Auth::id();
        $offer->online = $request->has('online');
        $offer->teacher_home = $request->has('teacher_home');
        $offer->student_home = $request->has('student_home');
        $offer->save();
        $tags = explode(",",$request->tags);
        foreach( $tags as $tag ) {
            $offer->tags()->save(new Tag(['offer_id' => $offer->id, 'name' => $tag]));
        }
        $offer->save();
        return redirect(route('offers.index'));
	}

	public function update( OfferRequest $request ){
        $offer = Offer::find($request->id);
        if( $offer->user->id == Auth::id() ){
            $offer->update($request->all());
            $offer->tags->each->delete();
            $tags = explode(",",$request->tags);
            foreach( $tags as $tag ) {
                $offer->tags()->save(new Tag(['offer_id' => $offer->id, 'name' => $tag]));
            }
            $offer->save();
        }
        return redirect(route('profile.offers',['user'=>$offer->user]));
    }

    public function delete(Offer $offer){
        if( $offer->user->id = Auth::id() ){
            $offer->delete();
        }
        return back();
    }

}
