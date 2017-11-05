<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Barcode;

class SuperadminController extends Controller
{
    public function index(){
    	$limenke = 0;
    	$barcodes = Barcode::where('material_id', 1)->get();

    	foreach ($barcodes as $barcode) {
    		$limenke += $barcode->users->count();
    	}
    	return view('superadmin.index', compact('limenke'));
    }
}
