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

    public function revenueOverLastSevenDays(){
        $day = date('j', strtotime(now()));
        $data = [];

        for($i = 0; $i<7; $i++){
            $cans = DB::table('barcode_user')->select('barcodes.weight as weight')
                ->join('barcodes', 'barcode_user.barcode_id', '=', 'barcodes.id')
                ->whereDay('barcode_user.created_at', $day - $i)
                ->where('barcodes.material_id', $this->id)->get();
                
                $total = 0;
                
            foreach ($cans as $can) {
                $total += $can->weight/1000 * $this->price;
            }
            array_push($data, $total);
        }

            // $count = $cans->count();
            // $weight = $count * $this->price;
            // array_push($data, $cans);
        

        return array_reverse($data);
    }

}
