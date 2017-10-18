<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App;

class Offer extends Model
{

    protected $fillable = [
        'name', 'description', 'price_per_hour'
    ];

    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }

    public function scopeFindFromAuthForUser($query, User $user)
    {
        if( isset($user) ) {
            return $query->where('user_id',$user->id)->get();
        }
    }
}