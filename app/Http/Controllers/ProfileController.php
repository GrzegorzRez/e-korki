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

        //statistics
        $averageScope = Opinion::averageGradeForUser($user);
        $gradesCount['all'] = Opinion::countOfGradeForUser($user);
        $gradesCount['1'] = Opinion::countOfGradeForUser($user,1);
        $gradesCount['2'] = Opinion::countOfGradeForUser($user,2);
        $gradesCount['3'] = Opinion::countOfGradeForUser($user,3);
        $gradesCount['4'] = Opinion::countOfGradeForUser($user,4);
        $gradesCount['5'] = Opinion::countOfGradeForUser($user,5);
        $gradesCount['6'] = Opinion::countOfGradeForUser($user,6);

    	return view('profile')
            ->with('user', $user)
            ->with('opinions', $opinions)
            ->with('averageScope',$averageScope)
            ->with('authOpinion',$authOpinion)
            ->with('gradesCount',$gradesCount);
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
