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
	if(Auth::check()){
		return Redirect::to('member');
	}
	else {
		return Redirect::to('login');		
	}
	
});

Route::get('login', function(){
	return View::make("/pages/login");
});

Route::post('login', 'HomeController@login');

Route::get('register', function(){
	return View::make('/pages/register');
});

Route::post('register','HomeController@insertUser');

Route::get('member', function(){
	$user = Auth::user();
	return View::make('/pages/member')->with('user_name', $user->nama_frontliner);
});

// Route::get('member', 'HomeController@aktifitas');

Route::post('member', function(){
	return View::make('/pages/member');
});

Route::get('info_saldo', function(){
	$user = Auth::user();
	return View::make('/pages/info_saldo')->with('saldo', strval($user->saldo))
											->with('user_name', $user->nama_frontliner);
});

Route::get('withdraw', function(){
	$user = Auth::user();
	return View::make('/pages/withdraw')->with('saldo' ,strval($user->saldo))
										->with('user_name', $user->nama_frontliner);
});

Route::get('example', function(){
	return View::make('/pages/example_login');
});

Route::get('success_register', function(){
	return View::make('/pages/success_register');	
});

Route::get('logout', "HomeController@logout");

Route::post('inser_nomor_imei', 'HomeController@inserNomerImei');

Route::post('withdraw_request', 'HomeController@requestWithdraw');

Route::get('list_sell_requests', 'HomeController@getListSellRequest');

Route::get('admin', 'HomeController@adminListSellRequest');
Route::post('admin', 'HomeController@updateListSellRequest');


Route::get('permintaan_withdraw', 'HomeController@adminListWitdrawRequest');
Route::post('permintaan_withdraw','HomeController@updateListWithdrawRequest');