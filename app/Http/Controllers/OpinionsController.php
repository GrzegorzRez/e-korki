<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpinionRequest;
use App\Opinion;
use Illuminate\Support\Facades\Auth;

class OpinionsController extends Controller
{
    public function store( OpinionRequest $request ){
        $result = Opinion::where('student_id',Auth::id())->where('teacher_id', $request->teacher_id )->get();
        if( $result->count() == 1 ){
            $opinion = $result->first();
            $opinion->update($request->all());
        }else{
            $opinion = new Opinion($request->all());
            $opinion->student_id = Auth::id();
        }
        $opinion->save();
        return redirect(route('profile.show',['id' => $opinion->teacher->id ]));
    }

    public function delete( Opinion $opinion ){
        if( $opinion->student->id == Auth::id() ){
            $opinion->delete();
        }
    }
    
}
