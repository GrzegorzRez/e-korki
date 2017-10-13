<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opionons extends Model
{
    protected $fillable = [
        'teacher_id', 'student_id' , 'content', 'grade'
    ];

    public function teacher(){
        return $this->belongsTo('App\User','teacher_id');
    }

    public function student(){
        return $this->belongsTo('App\User','student_id');
    }

}
