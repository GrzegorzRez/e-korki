<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DescribeOfferController extends Controller
{
    public function index()
    {
    	return view('offers.describe');
    }
}
