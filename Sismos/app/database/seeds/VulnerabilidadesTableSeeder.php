<?php

use Sismos\Entities\Vulnerabilidad;
// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VulnerabilidadesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

// ----------------acero
		Vulnerabilidad::create([			
			'muro'	=> 'Acero',
			'techo'	=> 'Acero',
			'tipo'	=> 'F',
			'tipodanos' => 'F',
			'tipomejorado' => 'F'
		]);	
//----------------adobe 
		Vulnerabilidad::create([				
			'muro'	=> 'Adobe',
			'techo'	=> 'Lámina acero',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);	
		
		Vulnerabilidad::create([			
			'muro'	=> 'Adobe',
			'techo'	=> 'Lámina de Asbesto',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Adobe',
			'techo'	=> 'Losa Macisa',
			'tipo'	=> 'A',
			'tipodanos' => 'A',
			'tipomejorado' => 'A'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Adobe',
			'techo'	=> 'Madera',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Adobe',
			'techo'	=> 'Teja',
			'tipo'	=> 'A',
			'tipodanos' => 'A',
			'tipomejorado' => 'A'
		]);
// ---------------Bajareque
		Vulnerabilidad::create([			
			'muro'	=> 'Bajareque',
			'techo'	=> 'Lámina de acero',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);
		
		Vulnerabilidad::create([			
			'muro'	=> 'Bajareque',
			'techo'	=> 'Lámina de asbesto',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);


		Vulnerabilidad::create([			
			'muro'	=> 'Bajareque',
			'techo'	=> 'Losa maciza',
			'tipo'	=> 'A',
			'tipodanos' => 'A',
			'tipomejorado' => 'A'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Bajareque',
			'techo'	=> 'Madera',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Bajareque',
			'techo'	=> 'Teja',
			'tipo'	=> 'A',
			'tipodanos' => 'A',
			'tipomejorado' => 'A'
		]);
// ---------------Block
		Vulnerabilidad::create([			
			'muro'	=> 'Block',
			'techo'	=> 'Lámina de acero',
			'tipo'	=> 'C',
			'tipodanos' => 'B',
			'tipomejorado' => 'D'
		]);
		
		Vulnerabilidad::create([			
			'muro'	=> 'Block',
			'techo'	=> 'Lámina de asbesto',
			'tipo'	=> 'C',
			'tipodanos' => 'B',
			'tipomejorado' => 'D'
		]);


		Vulnerabilidad::create([			
			'muro'	=> 'Block',
			'techo'	=> 'Losa maciza',
			'tipo'	=> 'D',
			'tipodanos' => 'C',
			'tipomejorado' => 'D'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Block',
			'techo'	=> 'Madera',
			'tipo'	=> 'C',
			'tipodanos' => 'B',
			'tipomejorado' => 'D'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Block',
			'techo'	=> 'Teja',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'C'
		]);
// --------------Ladrillo
		Vulnerabilidad::create([			
			'muro'	=> 'Ladrillo',
			'techo'	=> 'Lámina de acero',
			'tipo'	=> 'C',
			'tipodanos' => 'B',
			'tipomejorado' => 'D'
		]);
		
		Vulnerabilidad::create([			
			'muro'	=> 'Ladrillo',
			'techo'	=> 'Lámina de asbesto',
			'tipo'	=> 'C',
			'tipodanos' => 'B',
			'tipomejorado' => 'D'
		]);


		Vulnerabilidad::create([			
			'muro'	=> 'Ladrillo',
			'techo'	=> 'Losa maciza',
			'tipo'	=> 'D',
			'tipodanos' => 'C',
			'tipomejorado' => 'D'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Ladrillo',
			'techo'	=> 'Madera',
			'tipo'	=> 'C',
			'tipodanos' => 'B',
			'tipomejorado' => 'D'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Ladrillo',
			'techo'	=> 'Teja',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'C'
		]);
// -------------Concreto
		Vulnerabilidad::create([			
			'muro'	=> 'Concreto',
			'techo'	=> 'Lámina de acero',
			'tipo'	=> 'D',
			'tipodanos' => 'D',
			'tipomejorado' => 'D'
		]);
		
		Vulnerabilidad::create([			
			'muro'	=> 'Concreto',
			'techo'	=> 'Lámina de asbesto',
			'tipo'	=> 'D',
			'tipodanos' => 'D',
			'tipomejorado' => 'D'
		]);


		Vulnerabilidad::create([			
			'muro'	=> 'Concreto',
			'techo'	=> 'Losa maciza',
			'tipo'	=> 'D',
			'tipodanos' => 'D',
			'tipomejorado' => 'D'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Concreto',
			'techo'	=> 'Madera',
			'tipo'	=> 'D',
			'tipodanos' => 'D',
			'tipomejorado' => 'D'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Concreto',
			'techo'	=> 'Teja',
			'tipo'	=> 'D',
			'tipodanos' => 'D',
			'tipomejorado' => 'D'
		]);
//-------------- Diversas		
		Vulnerabilidad::create([
			'muro'	=> 'Diversas',
			'techo'	=> 'Diversas',
			'tipo'	=> 'A',
			'tipodanos' => 'A',
			'tipomejorado' => 'A'
		]);
//---------------Madera
		Vulnerabilidad::create([				
			'muro'	=> 'Madera',
			'techo'	=> 'Lámina acero',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);	
		
		Vulnerabilidad::create([			
			'muro'	=> 'Madera',
			'techo'	=> 'Lámina de Asbesto',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Madera',
			'techo'	=> 'Losa Macisa',
			'tipo'	=> 'A',
			'tipodanos' => 'A',
			'tipomejorado' => 'A'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Madera',
			'techo'	=> 'Madera',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Madera',
			'techo'	=> 'Teja',
			'tipo'	=> 'A',
			'tipodanos' => 'A',
			'tipomejorado' => 'A'
		]);
// -----------------panel de poliestireno
		Vulnerabilidad::create([			
			'muro'	=> 'Panel de poliestireno',
			'techo'	=> 'Lámina de acero',
			'tipo'	=> 'C',
			'tipodanos' => 'B',
			'tipomejorado' => 'D'
		]);
		
		Vulnerabilidad::create([			
			'muro'	=> 'Panel de poliestireno',
			'techo'	=> 'Lámina de asbesto',
			'tipo'	=> 'C',
			'tipodanos' => 'B',
			'tipomejorado' => 'D'
		]);


		Vulnerabilidad::create([			
			'muro'	=> 'Panel de poliestireno',
			'techo'	=> 'Losa maciza',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Panel de poliestireno',
			'techo'	=> 'Madera',
			'tipo'	=> 'C',
			'tipodanos' => 'B',
			'tipomejorado' => 'D'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Panel de poliestireno',
			'techo'	=> 'Teja',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);
// -----------------Panel de Yeso
		Vulnerabilidad::create([			
			'muro'	=> 'Panel de yeso',
			'techo'	=> 'Lámina de acero',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);
		
		Vulnerabilidad::create([			
			'muro'	=> 'Panel de yeso',
			'techo'	=> 'Lámina de asbesto',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);


		Vulnerabilidad::create([			
			'muro'	=> 'Panel de yeso',
			'techo'	=> 'Losa maciza',
			'tipo'	=> 'A',
			'tipodanos' => 'A',
			'tipomejorado' => 'A'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Panel de yeso',
			'techo'	=> 'Madera',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Panel de yeso',
			'techo'	=> 'Teja',
			'tipo'	=> 'A',
			'tipodanos' => 'A',
			'tipomejorado' => 'A'
		]);
// -----------------Piedra
		Vulnerabilidad::create([			
			'muro'	=> 'Piedra',
			'techo'	=> 'Lámina de acero',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);
		
		Vulnerabilidad::create([			
			'muro'	=> 'Piedra',
			'techo'	=> 'Lámina de asbesto',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);


		Vulnerabilidad::create([			
			'muro'	=> 'Piedra',
			'techo'	=> 'Losa maciza',
			'tipo'	=> 'A',
			'tipodanos' => 'A',
			'tipomejorado' => 'A'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Piedra',
			'techo'	=> 'Madera',
			'tipo'	=> 'B',
			'tipodanos' => 'A',
			'tipomejorado' => 'B'
		]);

		Vulnerabilidad::create([			
			'muro'	=> 'Piedra',
			'techo'	=> 'Teja',
			'tipo'	=> 'A',
			'tipodanos' => 'A',
			'tipomejorado' => 'A'
		]);
	}

}