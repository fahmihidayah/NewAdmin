<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->increments('id');
			$table->string('nama_frontliner')->nullable();
			$table->string('alamat_frontliner')->nullable();
			$table->string('kota_frontliner')->nullable();
			$table->string('nomor_telepon_frontliner')->nullable();
			$table->string('nomor_rekening_frontliner')->nullable();
			$table->string('nama_bank_frontliner')->nullable();
			$table->string('email')->unique();
			$table->string('password')->nullable();
			$table->string('nama_toko')->nullable();
			$table->string('alamat_toko')->nullable();
			$table->string('kota_toko')->nullable();
			$table->string('nomor_telepon_toko')->nullable();
			$table->string('nama_pemilik_toko')->nullable();
			$table->string('nomor_telepon_pemilik_toko')->nullable();
			$table->double('saldo',15,2)->nullable();
			$table->double('jumlah_penjualan_imei', 15, 0)->nullable();
			$table->string('remember_token');
			$table->string('type')->nullable();
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
		Schema::drop('users');
	}

}

