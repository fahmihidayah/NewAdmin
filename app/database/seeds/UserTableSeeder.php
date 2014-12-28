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
				'username'   => 'doctorv',
                'email'      => 'darthv@deathstar.com',
                'password'   => Hash::make('thedarkside'),
                'first_name' => 'Darth',
                'last_name'  => 'Vader',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
					),
				array(
				'username'   => 'goodsidesoldier',
                'email'      => 'lightwalker@rebels.com',
                'password'   => Hash::make('hesnotmydad'),
                'first_name' => 'Luke',
                'last_name'  => 'Skywalker',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime()
					)
			));
	}

}