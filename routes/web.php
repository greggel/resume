<?php

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


//working vulnerabiliy tool
// --
// --
//Route::get('/', "VulnerabilityController@index");


//Route::get('/', "ImportController@index");

/*Route::get('/', function ()
{
	return view('pages.business');
});
*/

Route::get('/', function() {

	return view('welcome');
	
	//$image = Html::image('/public/hooded.jpeg');
});
Route::post('/register', 'RegisterController@register')->middleware('visitor'); 
Route::get('/register', 'RegisterController@register')->middleware('visitor');
  
Route::get('about', function () {

		$people = ['Taylor', 'Matt', 'Jeffrey'];
    	return view('pages.about',compact('people')); //resources/views/pages/about.blade.php
		//return view('pages.about', compact('people'));

    });

Route::get('emails.register', function () {


    });




