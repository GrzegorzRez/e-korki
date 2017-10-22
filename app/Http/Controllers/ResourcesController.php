<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourceRequest;
use App\Resource;
use Illuminate\Support\Facades\Auth;

class ResourcesController extends Controller
{
    public function index(){
        $resources = Auth::user()->resources;
        $sharedResources = Auth::user()->sharedResources;
        return view('resources.index')->with('resources',$resources)->with('sharedResources',$sharedResources);
    }

    public function show( Resource $resource ){
        return view('resources.show')->with('resource',$resource);
    }

    public function add(){
        return view('resources.add');
    }

    public function store(ResourceRequest $request){
        $resource = new Resource($request->all());
        $resource->user_id = Auth::id();
        $resource->save();
        return redirect(route('resources.index'));
    }

    public function edit( Resource $resource )
    {
        if ($resource->user_id == Auth::id()) {
            return view('resources.edit')->with('resource', $resource);
        }else{
            return redirect(route('resources.index'));
        }
    }

    public function update( Resource $resource , ResourceRequest $request )
    {
        if ($resource->user_id == Auth::id()) {
            $resource->update($request->all());
        }
        return redirect(route('resources.index'));
    }

    public function delete(Resource $resource){
        if ($resource->user_id == Auth::id()) {
            $resource->delete();
        }
        return redirect(route('resources.index'));
    }
}
