<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpinionRequest;
use App\Opinion;
use App\User;
use Illuminate\Support\Facades\Auth;

class OpinionsController extends Controller
{
    public function index(){
        $opinions = Opinion::all();
        return view('opinions.index')->with('opinions',$opinions);
    }

    public function add( User $teacher ){
        return view('opinions.add')->with('teacher',$teacher);
    }

    public function store( OpinionRequest $request ){
        $opinion = new Opinion($request->all());
        $opinion->student_id = Auth::id();
        $opinion->save();
        return redirect(route('profile.show',['id' => $opinion->teacher->id ]));
    }

    public function delete( Opinion $opinion ){
        if( $opinion->student->id == Auth::id() ){
            $opinion->delete();
        }
    }
    
}
