<?php

namespace App\Http\Controllers;

use App\Opionons;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpinionsController extends Controller
{
    public function index(){
        $opinions = Opionons::all();
        return view('opinions.index')->with('opinions',$opinions);
    }
    
    
}
