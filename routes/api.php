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
	Route::get('/get-user/{token}/{bin_id}/{card_id}', 'ApiController@getUser');

	Route::get('/barcode/{token}/{bin_id}/{barcode}', 'ApiController@getProduct');

	Route::post('/recycle', 'ApiController@recycle');
});

Route::get('card-block-stats', 'ApiController@cardBlockStats');
Route::get('bar-chart-stats', 'ApiController@barChartStats');
Route::get('map-feed', 'ApiController@mapFeed');
Route::get('revenue-over-last-seven-days', 'ApiController@revenueOverLastSevenDays');

Route::post('token/{token}', function($token){
	return $token;
});