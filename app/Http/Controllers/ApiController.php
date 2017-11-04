<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Barcode;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Barcode as BarcodeResource;

class ApiController extends Controller
{
    public function getUser($card_id)
    {
    	$user = User::where('card_id', $card_id)->first();

    	if($user == null){
    		return response()->json([
    			'status' => 404,
    			'message' => 'Card ID unknown'
    		]);
    	}

    	return new UserResource($user);
    }

    public function getProduct($barcode)
    {
    	$barcode = Barcode::where('barcode', $barcode)->first();
    	
    	if($barcode == null){
    		return response()->json([
    			'status' => 404,
    			'message' => 'Barcode unknown'
    		]);
    	}

    	return new BarcodeResource($barcode);
    }

    public function recycle(Request $request)
    {
    	$input = $request->all();
    	$user = User::findOrFail($input['user_id']);
    	$user->barcodes()->attach($input['barcode_id'], ['bin_id'=>$input['bin_id']]);

    	return response()->json([
    			'status'=> 200,
    			'message' => 'Successfully recycled'
    		]);
    }
}
