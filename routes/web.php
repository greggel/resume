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

Route::get('/', [
	'middleware' =>'stranger',
	function() {
		return view('welcome');	
}]);

Route::post('/register', 'RegisterController@register')->middleware('visitor'); 
Route::get('/register', 'RegisterController@register')->middleware('visitor');
  
Route::get('about', function () {

		$people = ['Taylor', 'Matt', 'Jeffrey'];
    	return view('pages.about',compact('people')); //resources/views/pages/about.blade.php
		//return view('pages.about', compact('people'));

    });

/*Route::get('/hits', function() {

	return View::make('pages.hits')->with('data', App\hits::all()->where('hits','>',1));

});*/

Route::get('/hits', 'hitViews@ipHits');




