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

Route::get('/', function()
{
	return View::make('/pages/login');
});

Route::post('coba', function()
{
	return View::make('hello');
});

Route::get('register', function(){
	return View::make('/pages/register');
});

Route::post('register', function(){
	return 'register success';
});

Route::get('member', function(){
	return View::make('/pages/member');
});
Route::post('member', function(){
	return View::make('/pages/member');
});

Route::get('withdraw', function(){
	return View::make('/pages/withdraw');
});

Route::get('info_saldo', function(){
	return View::make('/pages/info_saldo');
});