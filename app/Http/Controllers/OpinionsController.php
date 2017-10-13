<?php

namespace App\Http\Controllers;

use App\Opionons;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpinionsController extends Controller
{
    public function show( int $id ){
        $opinion = Opionons::find(1);
        dd($opinion->teacher());
    }
}
