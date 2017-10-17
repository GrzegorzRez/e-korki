<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Opinion extends Model
{
    protected $table = 'opinions';

    protected $fillable = [
        'teacher_id', 'student_id' , 'content', 'grade'
    ];

    public function teacher(){
        return $this->belongsTo('App\User','teacher_id');
    }

    public function student(){
        return $this->belongsTo('App\User','student_id');
    }

    public function scopeFindFromNotAuthForUser($query, User $user)
    {
        if( isset($user) ) {
            return $query->where('teacher_id', $user->id)->where('student_id', '!=', Auth::id())->get();
        }
    }

    public function scopeFindFromAuthForUser($query, User $user)
    {
        if( isset($user) ) {
            return $query->where('teacher_id', $user->id)->where('student_id', Auth::id())->get();
        }
    }

    //statistics
    public function scopeAverageGradeForUser($query, User $user)
    {
        if (isset($user)) {
            $result = $query->where('teacher_id', $user->id)->avg('grade');
            if( is_float($result) ){
                return $result;
            }else{
                return 0;
            }
        }
    }
    public function scopeCountOfGradeForUser($query, User $user, int $gradeValue = null)
    {
        if( isset($user) ) {
            if ($gradeValue == null) {
                return $query->where('teacher_id', $user->id)->count();
            } else {
                return $query->where('teacher_id', $user->id)->where('grade', $gradeValue)->count();
            }
        }
    }

}
