<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Material extends Model
{
    protected $fillable = [
    	'name', 'price'
    ];

    public function barcodes(){
    	return $this->belongsToMany('App\Barcode');
    }

    public function getCount(){
    	$limenke = 0;
    	$barcodes = Barcode::where('material_id', $this->id)->get();

    	foreach ($barcodes as $barcode) {
    		$limenke += $barcode->users->count();
    	}
    	return $limenke;
    }

    public function percent(){
    	$all = DB::table('barcode_user')->count();
    	$material = $this->getCount();

		return round($material/$all*100, -1);
    }

}
