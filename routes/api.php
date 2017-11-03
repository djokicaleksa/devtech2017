<?php

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-user/{card_id}', function($card_id){
	$user = User::where('card_id', $card_id)->first();
	// return $user;
	return new UserResource($user);
});

Route::get('/barcode/{barcode}', function($barcode){
	return $barcode;
})