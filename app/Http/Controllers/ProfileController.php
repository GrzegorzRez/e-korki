<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Opinion;
use App\Offer;
use App\User;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{

    public function index()
    {
        return redirect(route('profile.show',['id'=>Auth::id()]));
    }

	public function show(User $user)
    {
    	return view('profile.informations')->with('user', $user);
    }

    public function offers( User $user ){
        $offers = Offer::findFromAuthForUser($user);
        return view('profile.offers')->with('user', $user)->with('offers',$offers);
    }

    public function opinions( User $user ){
        $opinions = Opinion::findFromNotAuthForUser($user);
        $authOpinions = Opinion::findFromAuthForUser($user);
        if( $authOpinions->count() == 1 ){
            $authOpinion = $authOpinions->first();
        }else{
            $authOpinion = null;
        }

        //statistics
        $gradesCount['all'] = Opinion::countOfGradeForUser($user);
        $gradesCount['1'] = Opinion::countOfGradeForUser($user,1);
        $gradesCount['2'] = Opinion::countOfGradeForUser($user,2);
        $gradesCount['3'] = Opinion::countOfGradeForUser($user,3);
        $gradesCount['4'] = Opinion::countOfGradeForUser($user,4);
        $gradesCount['5'] = Opinion::countOfGradeForUser($user,5);
        $gradesCount['6'] = Opinion::countOfGradeForUser($user,6);

        return view('profile.opinions')
            ->with('user', $user)
            ->with('opinions', $opinions)
            ->with('authOpinion',$authOpinion)
            ->with('gradesCount',$gradesCount);
    }

	public function edit()
	{
		$user = Auth::user();
		return view('profile.edit')->with('user',$user);
	}

	public function store(ProfileRequest $request)
	{
        $user = Auth::user();
        if(  $request->hasFile('avatar') ){
            $avatar = $request->avatar;
            $filename = $user->id.'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('uploads/avatars/'.$filename) );
            $user->avatar = $filename;
            $user->save();
        }
        $user->update($request->all());
		return redirect(route('profile.index'));
	}
}
