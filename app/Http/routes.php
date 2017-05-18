<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get('/profile', 'HomeController@profile');

Route::get('/user', 'HomeController@user');

Route::get('/user/delete/{id}', 'HomeController@deluser')->where('id', '[A-Za-z0-9\.\-]+');
Route::get('/user/active/{id}', 'HomeController@actuser')->where('id', '[A-Za-z0-9\.\-]+');
Route::get('/user/inactive/{id}', 'HomeController@inactuser')->where('id', '[A-Za-z0-9\.\-]+');

Route::get('/logout', function () {
	Auth::logout();
	return redirect('login');
});
