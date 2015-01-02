<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Eloquent::unguard();

		// $this->call('UserTableSeeder');
		DB::table('users')->insert(array(
				array(
				'nama_frontliner'   => 'admin',
                'alamat_frontliner'      => 'Jalan danau kelimutu c3 a1 malang',
                'kota_frontliner'   => 'malang',
                'nomor_telepon_frontliner' => '085646616284',
                'nomor_rekening_frontliner' => '6543520116846351846',
				'nama_bank_frontliner' => 'BCA',
				'email' => 'fahmi_ae@yahoo.com',
				'password' => Hash::make('fahmi'),
				'nama_toko' => 'toko keluarga',
				'alamat_toko' => 'Jalan Basuki Rahmat 112',
				'nomor_telepon_toko' => '0341716721',
				'nama_pemilik_toko' => 'Smasul',
				'nomor_telepon_pemilik_toko' => '085646616284',
				'kota_toko' => 'malang',
                'type'  => 'admin',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
					),
				array(
				'nama_frontliner'   => 'fahmi',
                'alamat_frontliner'      => 'Jalan danau kelimutu c3 a1 malang',
                'kota_frontliner'   => 'malang',
                'nomor_telepon_frontliner' => '085646616284',
                'nomor_rekening_frontliner' => '6543520116846351846',
				'nama_bank_frontliner' => 'BCA',
				'email' => 'vambex.system@yahoo.com',
				'password' => Hash::make('fahmi'), 
				'nama_toko' => 'toko keluarga',
				'alamat_toko' => 'Jalan Basuki Rahmat 112',
				'nomor_telepon_toko' => '0341716721',
				'nama_pemilik_toko' => 'Smasul',
				'nomor_telepon_pemilik_toko' => '085646616284',
				'kota_toko' => 'malang',
                'type'  => 'frontliner',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
					)
			));
	}

}