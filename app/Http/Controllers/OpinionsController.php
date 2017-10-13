<?php

namespace App\Http\Controllers;

use App\Opinion;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class OpinionsController extends Controller
{
    public function index(){
        $opinions = Opinion::all();
        return view('opinions.index')->with('opinions',$opinions);
    }

    public function add( User $teacher ){
        return view('opinions.add')->with('teacher',$teacher);
    }

    public function store( Request $request ){
        $opinion = new Opinion($request->all());
        $opinion->student_id = Auth::id();
        $opinion->save();
        return redirect(route('profile.show',['id' => $opinion->teacher->id ]));
    }
    
}
