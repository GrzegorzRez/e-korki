<?php

namespace App\Http\Controllers;

use App\Opinion;
use Illuminate\Http\Request;

class OpinionsController extends Controller
{
    public function index(){
        $opinions = Opinion::all();
        return view('opinions.index')->with('opinions',$opinions);
    }

    public function add( User $user ){
        return view('opinions.index')->with('opinions');
    }

    public function store( Request $request ){
        Opinion::create($request->all());
        return redirect('index');
    }
    
}
