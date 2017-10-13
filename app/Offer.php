<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'name', 'description', 'price_per_hour'
    ];

    public function user(){
    	return $this->belongsTo('App\User','user_id');
    }
}
