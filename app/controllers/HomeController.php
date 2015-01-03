<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function insertUser()
	{
		$rules = array(
			'nama_frontliner' => 'required',
			'email' => 'required|email|unique:users',
			'alamat_frontliner' => 'required',
			'kota_frontliner' => 'required',
			'nomor_telepon_frontliner' => 'required',
			'nomor_rekening' => 'required',
			'nama_bank' => 'required',
			'password' => 'required',
			're_type_password' => 'required|same:password',
			'alamat_toko' => 'required',
			'nama_pemilik' => 'required',
			'nomor_telepon_pemilik' => 'required'
			);
		$validator_message = array(
			'required' => ':attribute belum diisi',
			'email' => ':attribute yang diisikan salah',
			'unique' => ':attribute email sudah terdaftar',
			'same' => ':attribute password harus sama'
			);
		$validator = Validator::make(Input::all(), $rules, $validator_message);
		if($validator->fails()){
			$messages = $validator->messages();
			return Redirect::to('register')->withErrors($validator);
		}
		else {
			$user = new User();
			$user->nama_frontliner = Input::get('nama_frontliner');
			$user->email = Input::get('email');
			$user->alamat_frontliner = Input::get('alamat_frontliner');
			$user->kota_frontliner = Input::get('kota_frontliner');
			$user->nomor_telepon_frontliner = Input::get('nomor_telepon_frontliner');
			$user->nomor_rekening_frontliner = Input::get('nomor_rekening');
			$user->nama_bank_frontliner = Input::get('nama_bank');
			$user->password = Hash::make(Input::get('password'));
			$user->nama_toko = Input::get('nama_toko');
			$user->kota_toko = Input::get("kota_toko");
			$user->alamat_toko = Input::get('alamat_toko');
			$user->nomor_telepon_toko = Input::get('nomor_telepon_toko');
			$user->nama_pemilik_toko = Input::get('nama_pemilik');
			$user->nomor_telepon_pemilik_toko = Input::get('nomor_telepon_pemilik');
			$user->saldo = 0.0;
			$user->type = "reseller";

			$user->save();

			return Redirect::to('success_register');
		}
	}

	public function login()
	{
		$rules = array(
			'email' => 'required|email',
			'password' => 'required|alphaNum|min:3'
			);
		$validator_message = array(
			'required' => ':attribute belum diisi',
			'email' => ':attribute diisikan salah',
			'alphaNum' => ':attribute eror',
			'min'=> ':attribute minimal 3 karakter'
			);
		$validator = Validator::make(Input::all(), $rules, $validator_message);

		if($validator->fails()){
			return Redirect::to("login")
			->withErrors($validator)
			->withInput(Input::except('password'));
		}
		else {
			$userdata = array(
				'email' => Input::get('email'),
				'password' => Input::get('password')
				);
			if(Auth::attempt($userdata, true)){
				$user = Auth::user();
				if($user->type === "admin"){
					return Redirect::to('admin');
				}	
				else {
					return Redirect::to('member');		
				}
				
			}
			else 
			{
				return Redirect::to('login')->withErrors(array('wrongpw' => 'Wrong E-mail address or Password'));
			}
		}

	}

	public function logout()
	{
		Auth::user()->remember_token = "";
		Auth::logout();

		return Redirect::to('login');
	}

	public function inserNomerImei()
	{
		$rules = array(
			'nomor_imei' => 'required',
			'nomor_smartfren' => 'required',
			'nama_konsumen' => 'required',
			'alamat_konsumen' => 'required',
			'kota_konsumen' => 'required',
			'nomor_telepon_konsumen' => 'required',
			'nomor_ktp_konsumen' => 'required'
			);
		$validator_message = array(
			'required' => ':attribute belum diisi'
			);
		$validator = Validator::make(Input::all(), $rules, $validator_message);
		if($validator->fails()){
			$messages = $validator->messages();
			return Redirect::to('member')->withErrors($validator);
		}
		else {
			$sell_request = new SellRequest();
			$sell_request->nomor_imei = Input::get('nomor_imei');
			$sell_request->nomor_smartfren = Input::get('nomor_smartfren');
			$sell_request->nama_konsumen = Input::get('nama_konsumen');
			$sell_request->alamat_konsumen = Input::get('alamat_konsumen');
			$sell_request->kota_konsumen = Input::get('kota_konsumen');
			$sell_request->telepon_konsumen = Input::get('nomor_telepon_konsumen');
			$sell_request->nomor_ktp_konsumen = Input::get('nomor_ktp_konsumen');
			$sell_request->status_request = "menunggu";
			$sell_request->user_id = Auth::id();
			$sell_request->save();
			return Redirect::to('member');
		}
	}

	public function requestWithdraw()
	{
		$user = Auth::user();

		$rules = array(
			'jumlah_withdraw' => 'required|Integer|digits_between:0,'.$user->saldo
			);
		$validator_message = array(
			'required' => ':attribute belum diisi',
			'Integer' => ':attribute harus nilai numerik',
			'digits_between' => 'jumlah yang diimputkan salah'
			);
		$validator = Validator::make(Input::all(), $validator_message);

		if($validator->fails()){
			$messages = $validator->messages();
			return Redirect::to('withdraw')->withErrors($validator);
		}
		else {
			$withdraw_request = new WithdrawRequest();
			$withdraw_request->jumlah_pengambilan = intval(Input::get('jumlah_withdraw'));
			$withdraw_request->status_request = "menunggu";
			$withdraw_request->user_id = $user->id;
			$withdraw_request->save();
			return Redirect::to('withdraw');
		}
	}

	public function adminListSellRequest()
	{
		$list_sell_requests = SellRequest::where('status_request', '=', 'menunggu')->get();	
		$user = Auth::user();
		return View::make('/pages/admin')->with('list_sell_requests', $list_sell_requests)
										->with('user', $user);
	}

	public function updateListSellRequest()
	{
		$list_sell_requests = SellRequest::where('status_request', '=', 'menunggu')->get();	
		
		foreach ($list_sell_requests as $sell_request) {
			if(Input::get($sell_request->id) === 'on'){
				$sell_request->status_request = "benar";
				$user = $sell_request->user;
				$user->jumlah_penjualan_imei = $user->jumlah_penjualan_imei + 1;
				$user->save();
				$sell_request->save();
			}

		}
		$list_sell_requests = SellRequest::where('status_request', '=', 'menunggu')->get();	
		$user = Auth::user();
		return View::make('/pages/admin')->with('list_sell_requests', $list_sell_requests)
											->with('user',$user);
	}

	public function getListSellRequest()
	{
		$list_sell_requests = SellRequest::where('status_request', '=', 'menunggu')->get();
		return $list_sell_requests;
	}

	public function adminListWitdrawRequest()
	{
		$list_withdraw_requests = WithdrawRequest::where('status_request', '=', 'menunggu')->get();	
		$user = Auth::user();
		return View::make('/pages/permintaan_withdraw')->with('list_withdraw_requests', $list_withdraw_requests)
														->with('user', $user);
	}

	public function updateListWithdrawRequest()
	{
		$list_sell_requests = WithdrawRequest::where('status_request', '=', 'menunggu')->get();	
		foreach ($list_sell_requests as $sell_request) {
			if(Input::get($sell_request->id) === 'on'){
				$sell_request->status_request = "benar";
				$saldo = $sell_request->user->saldo;
				$saldo = $saldo - $sell_request->jumlah_pengambilan;
				$sell_request->user->saldo = $saldo;
				$sell_request->save();
				$sell_request->user->save();
			}
			else {
				$sell_request->status_request = "salah";
			}
		}
		$list_withdraw_requests = WithdrawRequest::where('status_request', '=', 'menunggu')->get();	
		$user = Auth::user();
		return View::make('/pages/permintaan_withdraw')->with('list_withdraw_requests', $list_withdraw_requests)
														->with('user', $user);
	}

/**
belim diimplementasikan
**/

	public function updateAllUserSaldo()
	{
		$list_users = User::all();
		foreach ($list_users as $user) {
			if($user->jumlah_penjualan_imei <= 10){
				$user->saldo = $user->saldo + (5000 * $user->jumlah_penjualan_imei);
			}
			else if($user->jumlah_penjualan_imei >= 11 && $user->jumlah_penjualan_imei <= 20){
				$user->saldo = $user->saldo + (7500 * ($user->jumlah_penjualan_imei - 10)) + 50000;
			}
			else if($user->jumlah_penjualan_imei >= 21){
				$user->saldo = $user->saldo + (10000 * ($user->jumlah_penjualan_imei - 20)) + 125000;
			}
			$user->jumlah_penjualan_imei = 0;
			$user->save();
		}
		return Redirect::to('admin');
	}

	// public function apiLogin()
	// {
	// 	$rules = array(
	// 		'email' => 'required|email',
	// 		'password' => 'required|alphaNum|min:3'
	// 		);
	// 	$validator_message = array(
	// 		'required' => ':attribute belum diisi',
	// 		'email' => ':attribute diisikan salah',
	// 		'alphaNum' => ':attribute eror',
	// 		'min'=> ':attribute minimal 3 karakter'
	// 		);
	// 	$validator = Validator::make(Input::all(), $rules, $validator_message);

	// 	if($validator->fails()){
	// 		return $validator->messages()->toJson();
	// 	}
	// 	else {
	// 		$userdata = array(
	// 			'email' => Input::get('email'),
	// 			'password' => Input::get('password')
	// 			);			
	// 		else 
	// 		{
	// 			$user = Auth::user();
	// 			return $user;
	// 		}
	// 	}
	// }
}
