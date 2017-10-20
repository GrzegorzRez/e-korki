<?php

namespace App\Http\Controllers;

use App\Resource;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class ResourcesController extends Controller
{
    public function index(){
        return view('resources.index');
    }

    public function add(){
        return view('resources.add');
    }

    public function show($id){
        return view('resources.show');
    }

    public function store(Request $request){
        $resource = new Resource($request->all());
        $resource->user_id = Auth::id();
        $resource->save();
        redirect(route('resources.index'));
    }

    public function delete(Resource $resource){
        $resource->delete();
        redirect(route('resources.index'));
    }
}
