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
	'middleware' =>'strangerMiddleware',
	function() {
		return view('welcome');	
}]);

Route::post('/register', 'RegisterController@register')->middleware('visitor'); 
Route::get('/register', 'RegisterController@register')->middleware('visitor');
  
Route::get('/hits', 'hitViews@ipHits');

Route::get('/strangers', 'StrangerController@index');



