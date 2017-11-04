<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barcode extends Model
{
    protected $fillable = [
    	'barcode', 'material', 'name', 'manufacturer', 'weight', 'country'
    ];

    public function material(){
    	return $this->belongsTo('App\Material');
    }

    public function users(){
    	return $this->belongsToMany('App\User');
    }
}
