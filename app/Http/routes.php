<?php
/**
*home
 */
Route::get('/', 
	[
	'uses' => '\Chatty\Http\Controllers\HomeController@index',
	'as' => 'home', 
	]);
/**
 * Authentication
 */

Route::get('/signup', [
	'uses' => '\Chatty\Http\Controllers\AuthController@getSignup',
	'as' => 'auth.signup',
	'middleware' => ['guest'],
	]);

Route::post('/signup', [
	'uses' => '\Chatty\Http\Controllers\AuthController@postSignup',
	'middleware' => ['guest'],

	]);

Route::get('/signin', [
	'uses' => '\Chatty\Http\Controllers\AuthController@getSignin',
	'as' => 'auth.signin',
	'middleware' => ['guest'],
	]);

Route::post('/signin', [
	'uses' => '\Chatty\Http\Controllers\AuthController@postSignin',
	]);

Route::get('/logout', [
	'uses' => '\Chatty\Http\Controllers\AuthController@getSignout',
	'as' => 'auth.logout',
	]);

/**
 * search
 */

Route::get('/search', [
	'uses' => '\Chatty\Http\Controllers\SearchController@getResults',
	'as' => 'search.results',
	]);
