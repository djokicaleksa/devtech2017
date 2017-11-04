<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Barcode;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\Barcode as BarcodeResource;

class ApiController extends Controller
{
    public function getUser($token, $bin_id, $card_id)
    {
    	$user = User::where('card_id', $card_id)->first();

    	// if($user == null){
    	// 	return response()->json([
    	// 		'status' => 404,
    	// 		'message' => 'Card ID unknown'
    	// 	]);
    	// }

    	return new UserResource($user);
    }

    public function getProduct($token, $bin_id, $barcode)
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
    	$barcode = Barcode::find($input['barcode_id']);
    	$user->barcodes()->attach($input['barcode_id'], ['bin_id'=>$input['bin_id']]);
    	$credit = $user->balance + ($barcode->material->price / 1000) * $barcode->weight;
    	$user->update([
    		'balance' => $credit 
    		]);
    	return response()->json([
    			'status'=> 200,
    			'message' => 'Successfully recycled',
    			'credit' => (string) $user->balance,
    		]);
    }
}
