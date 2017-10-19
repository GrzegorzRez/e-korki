<?php

namespace App\Http\Controllers;

use App\Resource;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Auth;

class ResourcesController extends Controller
{
    public function index(){
        return Auth::user()->resources;
    }

    public function add(){
        return 'Jakiś widok dodawania.';
    }

    public function show($id){
        return Resource::find($id);
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
