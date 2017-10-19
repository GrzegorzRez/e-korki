<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['offer_id','name'];

    public function offer(){
        return $this->belongsTo('App\Offer','offer_id');
    }
}
