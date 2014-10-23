<?php

use Sismos\Entities\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
		$this->call('DirectoresTableSeeder');
		$this->call('EncuestadoresTableSeeder');
	}

}
