<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);


// candidates/backend-developer/1
Route::get('candidates/{slug}/{id}', [
	'as' => 'category', 
	'uses' => 'CandidatesController@category'
	]);

//rafael-garcia-doblas/1
Route::get('{slug}/{id}', [
	'as' => 'candidate', 
	'uses' => 'CandidatesController@show'
	]);

Route::group(['before' => 'guest'], function (){

	Route::get('sign-up', [
		'as' => 'sign_up',
		'uses' => 'UsersController@signUp'
		]);

	Route::post('sign-up', [
		'as' => 'register',
		'uses' => 'UsersController@register'
		]);
	
	Route::post('login', [
		'as' => 'login', 
		'uses' => 'AuthController@login'
		]);
});


// Forms. The guest users should not have access to this pages.

Route::group(['before' => 'auth'], function(){

	require (__DIR__ . '/routes/auth.php');

	// Admin routes

	Route::group(['before' => 'is_admin'], function(){

		require (__DIR__ . '/routes/admin.php');
	});


});



