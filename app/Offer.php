<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App;

class Offer extends Model
{

    protected $fillable = [
       'category_id', 'name', 'description', 'price_per_hour','location'
    ];

    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }

    public function tags(){
        return $this->hasMany('App\Tag');
    }

    public function scopeFindFromAuthForUser($query, User $user)
    {
        if( isset($user) ) {
            return $query->where('user_id',$user->id)->get();
        }
    }
}