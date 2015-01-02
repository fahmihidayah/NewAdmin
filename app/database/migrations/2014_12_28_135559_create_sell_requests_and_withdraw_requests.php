<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellRequestsAndWithdrawRequests extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sell_requests', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nomor_imei');
			$table->string('nomor_smartfren');
			$table->string('nama_konsumen');
			$table->string('alamat_konsumen');
			$table->string('kota_konsumen');
			$table->string('telepon_konsumen');
			$table->string('nomor_ktp_konsumen');
			$table->string('status_request');
			$table->integer('user_id')->nullable();
			$table->timestamps();
		});
		Schema::create('withdraw_requests', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('jumlah_pengambilan',15,4);
			$table->string('status_request');
			$table->integer('user_id')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sell_requests');
		Schema::drop('withdraw_requests');
	}

}
