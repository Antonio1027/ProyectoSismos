<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use Sismos\Entities\Encuestador;

class EncuestadoresTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create('es_ES');

		foreach(range(1, 10) as $index)
		{
			Encuestador::create([
				'full_name'=>$faker->name
			]);
		}
	}

}