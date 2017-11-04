<?php

use Illuminate\Http\Request;
use App\User;
use App\Barcode;
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


Route::middleware(['apiauth'])->group(function(){
	Route::get('/get-user/{token}/{card_id}/{bin_id}', 'ApiController@getUser');

	Route::get('/barcode/{token}/{barcode}/{bin_id}', 'ApiController@getProduct');
	
	Route::post('/recycle', 'ApiController@recycle');
});