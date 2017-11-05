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

	Route::get('/ads-feed/{token}/{bin_id}', 'AdsController@adsFeed');

	// Route::post('');
});

Route::post('recycle', 'ApiController@recycle');
Route::get('card-block-stats', 'ApiController@cardBlockStats');
Route::get('bar-chart-stats', 'ApiController@barChartStats');
Route::get('map-feed', 'ApiController@mapFeed');
Route::get('revenue-over-last-seven-days', 'ApiController@revenueOverLastSevenDays');
Route::get('kilograms-over-last-seven-days', 'ApiController@kilogramsOverLastSevenDays');

Route::post('token/{token}', function($token){
	return $token;
});

Route::get('/subscription/create/notification/{eventUrl}', function($json){
	
	$user_data = [
		'email' => $json['email'],
		'name' => $json['firstName'] . ' ' . $json['lastName'],
		'role_id' => 2, //B2B 
	];
	
	
	$order_data = $json['order']; //podaci o narudzbini
	$user = User::where('email', $user_data['email'])->first();

	if(check($order_data)){ 
		if($user == null){
			$user = User::create($user_data);
			$order = Order::create($order_data);
			$order->user_id = $user->id;
			$order->save();

			event(new newOrder($order));

			return response()->json([
					"accountIdentifier"=> $user->id,
 					"success"=>true
				]);
		}else{
			return response()->json([
					"errorCode"=> "USER_ALREADY_EXISTS",
 					"success"=>false
				]);
		}
	}else{
		return response()->json([
					"message"=> 'Order is not valid',
 					"success"=>false
				]);
	}
	
});

Route::get('/subscription/change/notification', function($json){

});

Route::get('/subscription/cancel/notification/{eventUrl}', function(){

});

Route::get('/subscription/status/notification', function(){

});

Route::get('/video', function(){

	return response()->json([
			'video_url' => 'http://res.cloudinary.com/dc1dbax5r/video/upload/v1509890409/Best_emotional_advertisement_ever_vzp7p6.mp4'
		]);
});

Route::get('/ad-sold/{id}', function($id){
	$ad = \App\Ads::find($id);
	$ad->update(['cnt' => $ad->cnt++]);
	return response()->json(['status'=>200, 'message'=>'gj']);
});