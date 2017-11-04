<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
    	'name', 'price'
    ];

    public function barcodes(){
    	return $this->belongsToMany('App\Barcode');
    }
}
