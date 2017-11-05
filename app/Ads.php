<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $fillable = [
    	'name', 'image', 'user_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
