<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Sismos\Entities\Director;

class DirectoresTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');

		foreach(range(1, 10) as $index)
		{
			Director::create([
				'full_name'=>$faker->userName
			]);
		}
	}

}