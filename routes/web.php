<?php

use App\Events\eventTrigger;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alertBox', function(){
	return view('eventListener');
});

Route::get('fireEvent', function(){
	event(new eventTrigger());
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verifyemail/{token}', 'Auth\RegisterController@verify');

Route::middleware(['superadmin'])->group(function(){
	Route::prefix('dashboard/')->group(function(){
		Route::resource('ads', 'AdsController');
		Route::resource('bins', 'BinController');
		Route::resource('materials', 'MaterialController');
		Route::get('/', 'SuperadminController@index');
	});
	
	// Route::get('/superadmin', function(){
	// 	return "Superadmin";
	// });
});

Route::middleware(['admin'])->group(function(){
	Route::get('/admin', function(){
		return "Admin";
	});
});

Route::middleware(['user'])->group(function(){
	Route::get('/user', function(){
		return "user";
	});
});


Route::post('image-upload', function(){

    $filename = realpath('images/videos/zeka.mp4');
    $publicId = 'zeka-ludi';
    $options = ['faces'=>true];

    try {
    	$image = Cloudder::uploadVideo($filename, $publicId, $options);
    	return response()->json(['image'=>$image->api]);
	}catch (Exception $e) {
    	echo $e;
	}
	
});



Route::get('location', function(){
	return view('location');
});

Route::get('about', function(){
	return view('about');
});

Route::get('contact', function(){
	return view('about');
});
