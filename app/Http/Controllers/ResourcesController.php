<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResourceRequest;
use App\Http\Requests\ShareResourceRequest;
use App\Resource;
use App\Attachment;
use App\User;
use GuzzleHttp\Psr7\Request;
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

        if($request->hasFile('attachment')){
            $file = $request->attachment;
            $file->store('upload');
            $attachment = new Attachment();
            $attachment->resource_id = $resource->id;
            $attachment->path = $file->hashName();
            $attachment->save();
        }

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

    public function shareForUser( User $user ){
        return view('resources.shareForUser')->with('resources',Auth::user()->resources)->with('user',$user);
    }

    public function share( User $user , ShareResourceRequest $request ){
        $user->sharedResources()->detach();
        foreach( $request->resources_id as $resource_id ){
            $user->sharedResources()->attach($resource_id);
        }
        return redirect(route('messages.conversation',['receive_user_id'=>$user->id]));
    }

    public function update( Resource $resource , ResourceRequest $request )
    {
        if ($resource->user_id == Auth::id()) {
            $resource->update($request->all());

            if($request->hasFile('attachment')){
                $file = $request->attachment;
                $file->store('upload');
                $attachment = new Attachment();
                $attachment->resource_id = $resource->id;
                $attachment->path = $file->hashName();
                $attachment->save();
            }
        }
        return redirect(route('resources.index'));
    }

    public function delete(Resource $resource){
        if ($resource->user_id == Auth::id()) {
            $resource->delete();
        }
        return redirect(route('resources.index'));
    }

    public function upload(Request $request){
       $path = $request->file('file')->store('file');

       return $path;
    }
}
