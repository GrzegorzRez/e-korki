<?php

namespace App\Http\Controllers;

use App\Opinion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        return redirect(route('profile.show',['id'=>Auth::id()]));
    }

	public function show($id)
    {
    	$user = User::find($id);
    	$opinions = Opinion::findFromNotAuthForUser($user);
    	$authOpinions = Opinion::findFromAuthForUser($user);
        if( $authOpinions->count() == 1 ){
            $authOpinion = $authOpinions->first();
        }else{
            $authOpinion = null;
        }
        $averageScope = Opinion::averageGradeForUser($user);
    	return view('profile')
            ->with('user', $user)
            ->with('opinions', $opinions)
            ->with('averageScope',$averageScope)
            ->with('authOpinion',$authOpinion);
    }

	public function edit()
	{
		$user = Auth::user();
		return view('/profile/edit')->with('user',$user);
	}

	public function store(Request $request)
	{
        Auth::user()->update($request->all());
		return redirect(route('profile.index'));
	}
}
