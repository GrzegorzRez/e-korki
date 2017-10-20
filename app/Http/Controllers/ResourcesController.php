<?php

namespace App\Http\Controllers;

use App\Resource;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class ResourcesController extends Controller
{
    public function index(){
        $resources = Auth::user()->resources;
        return view('resources.index')->with('resources',$resources);
    }

    public function add(){
        return view('resources.add');
    }

    public function show( $id ){
        $resource = Resource::find($id);
        return view('resources.show')->with('resource',$resource);
    }

    public function store(Request $request){
        $resource = new Resource($request->all());
        $resource->user_id = Auth::id();
        $resource->save();
        return redirect(route('resources.index'));
    }

    public function delete(Resource $resource){
        $resource->delete();
        return redirect(route('resources.index'));
    }
}
