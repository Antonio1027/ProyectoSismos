<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Sismos\Entities\User;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');

		foreach(range(1, 10) as $index)
		{
			User::create([
				'full_name'=> $faker->name
			]);
		}
	}

}