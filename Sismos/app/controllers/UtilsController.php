<?php

use Sismos\Repositories\UserRepo;
use Sismos\Repositories\DirectoresRepo;
use Sismos\Repositories\ConstruccionesRepo;

class UtilsController extends BaseController {

	protected $userRepo, $directoresRepo,$construccionesRepo;

	function __construct( UserRepo $userRepo, DirectoresRepo $directoresRepo,
						  ConstruccionesRepo $construccionesRepo){
		$this->userRepo = $userRepo;
		$this->directoresRepo = $directoresRepo;
		$this->construccionesRepo = $construccionesRepo;
	}
	public function searchUsers(){
		$username = Input::get('username');
		$type = Input::get('type');

		$users = $this->userRepo->findField($username, $type);
		return Response::json($users);
	}
	public function searchDirectores(){
		$full_name = Input::get('full_name');

		$directores = $this->directoresRepo->findField($full_name);
		return Response::json($directores);
	}
	public function searchRegistros(){		
		$formato = Input::get('formato');
		$director = Input::get('director');	

		$records = $this->construccionesRepo->findField($formato,$director);

		return Response::json($records);
	}
	public function searchRegistro(){		
		$id = Input::get('id');
		$record = $this->construccionesRepo->findConstruccion($id);
		return Response::json($record);
	}
	public function getAnalytics(){
		$zona = Input::get('zona');
		$data = [];
		$datas = [];
		$table1 = [];
		$table2 = [];
		$table1totales = array('totalsindanos' => 0, 'totalcondanos' => 0, 'totalmejorados' => 0, 'totales' => 0, );
		$table2totales = array('total' => 0 );

		// Obtenemos y agrupamos
		$registros = $this->construccionesRepo->findzonas($zona);
		foreach ($registros as $key => $value) {
			$aux = [];
			$aux['idvulnerabilidad'] = $value->vulnerabilidad->id;
			$aux['muro'] = $value->vulnerabilidad->muro;
			$aux['techo'] = $value->vulnerabilidad->techo;
			$aux['danos'] = $value->danos;
			$aux['mantenimiento'] = $value->mantenimiento;
			$aux['tipodanos'] = $value->vulnerabilidad->tipodanos;
			$aux['tipo'] = $value->vulnerabilidad->tipo;
			$aux['tipomejorado'] = $value->vulnerabilidad->tipomejorado;
			$aux['datos_gps'] = $value->datos_gps;

			array_push($data, $aux);
		}
		// Armamos la tabla1 "Caracteristicas de las estructuras"
		foreach ($data as $key => $value) {
			$aux = [];
			$table1totales['totales']++;
			if( array_key_exists($value['idvulnerabilidad'], $table1) ){
				$table1[$value['idvulnerabilidad']]['total'] ++;
				if($value['danos'] == 'Si'){
					$table1totales['totalcondanos']++;
					$table1[$value['idvulnerabilidad']]['condanos'] ++;
				}
				else{
					$table1totales['totalsindanos']++;
					$table1[$value['idvulnerabilidad']]['sindanos'] ++;
				}

				if($value['mantenimiento'] == 'Bueno' || $value['mantenimiento'] == 'Adecuado'){
					$table1totales['totalmejorados']++;
					$table1[$value['idvulnerabilidad']]['mejorado'] ++;
				}
			}
			else{
				$aux['id'] = $value['muro'] . ' - ' . $value['techo'];
				$aux['total'] = 1;
				if($value['danos'] == 'Si'){
					$aux['condanos'] = 1;
					$aux['sindanos'] = 0;
					$table1totales['totalcondanos']++;
				}
				else{
					$aux['condanos'] = 0;
					$aux['sindanos'] = 1;
					$table1totales['totalsindanos']++;
				}

				if($value['mantenimiento'] == 'Bueno' || $value['mantenimiento'] == 'Adecuado'){
					$table1totales['totalmejorados']++;
					$aux['mejorado'] = 1;
				}
				else
					$aux['mejorado'] = 0;

				$table1[$value['idvulnerabilidad']] = $aux;
			}
		}
		//Construimos la tabla2 ""
		foreach ($data as $key => $value) {
			$aux = [];
			$aux['datos_gps'] = $value['datos_gps'];
			if($value['danos'] == 'Si')
				$aux['tipo'] = $value['tipodanos'];
			else
				$aux['tipo'] = $value['tipo'];
			if($value['mantenimiento'] == 'Bueno' || $value['mantenimiento'] == 'Adecuado')
				$aux['tipo'] = $value['tipomejorado'];

			if( array_key_exists($value['idvulnerabilidad'].$aux['tipo'], $table2) )
				$table2[$value['idvulnerabilidad'].$aux['tipo']]['total']++;
			else{
				$aux['estructura'] = $value['muro'] . ' - ' . $value['techo'];
				$aux['total'] = 1;
				$table2[$value['idvulnerabilidad'].$aux['tipo']] = $aux;
			}
			$table2totales['total']++;
		}

		$datas['table1'] = $table1;
		$datas['table1totales'] = $table1totales;
		$datas['table2'] = $table2;
		$datas['table2totales'] = $table2totales;
		return Response::json($datas);
	}

	public function getTecho(){
		$muro = Input::get('muro');
		$techos = $this->construccionesRepo->getTechosList($muro);
		return Response::json($techos);		
	}
	public function getTechoid(){
		$id = Input::get('id');
		$techos = $this->construccionesRepo->getTechosIdList($id);
		return Response::json($techos);		
	}

	public function getAnalyticsTable(){
		$zona = Input::get('zona');
		$fuente = Input::get('fuente');

		$data = [];
		$datas = [];
		$table1 = [];
		$table2 = [];
		$table3 = [];
		$table1totales = array('totalsindanos' => 0, 'totalcondanos' => 0, 'totalmejorados' => 0, 'totales' => 0, );
		$table2totales = array('total' => 0 );
		$table3totales = array('total' => 0 );

		// Obtenemos y agrupamos
		$registros = $this->construccionesRepo->findzonas($zona, $fuente);
		
		foreach ($registros as $key => $value) {
			$aux = [];
			$aux['idvulnerabilidad'] = $value->vulnerabilidad->id;
			$aux['muro'] = $value->vulnerabilidad->muro;
			$aux['techo'] = $value->vulnerabilidad->techo;
			$aux['danos'] = $value->danos;
			$aux['mantenimiento'] = $value->mantenimiento;
			$aux['tipodanos'] = $value->vulnerabilidad->tipodanos;
			$aux['tipo'] = $value->vulnerabilidad->tipo;
			$aux['tipomejorado'] = $value->vulnerabilidad->tipomejorado;

			array_push($data, $aux);
		}

		// Armamos la tabla1 "Caracteristicas de las estructuras"
		foreach ($data as $key => $value) {
			$aux = [];
			$table1totales['totales']++;
			if( array_key_exists($value['idvulnerabilidad'], $table1) ){
				$table1[$value['idvulnerabilidad']]['total'] ++;
				if($value['danos'] == 'Si'){
					$table1totales['totalcondanos']++;
					$table1[$value['idvulnerabilidad']]['condanos'] ++;
				}
				else{
					$table1totales['totalsindanos']++;
					$table1[$value['idvulnerabilidad']]['sindanos'] ++;
				}

				if($value['mantenimiento'] == 'Bueno' || $value['mantenimiento'] == 'Adecuado'){
					$table1totales['totalmejorados']++;
					$table1[$value['idvulnerabilidad']]['mejorado'] ++;
				}
			}
			else{
				$aux['id'] = $value['muro'] . ' - ' . $value['techo'];
				$aux['total'] = 1;
				if($value['danos'] == 'Si'){
					$aux['condanos'] = 1;
					$aux['sindanos'] = 0;
					$table1totales['totalcondanos']++;
				}
				else{
					$aux['condanos'] = 0;
					$aux['sindanos'] = 1;
					$table1totales['totalsindanos']++;
				}

				if($value['mantenimiento'] == 'Bueno' || $value['mantenimiento'] == 'Adecuado'){
					$table1totales['totalmejorados']++;
					$aux['mejorado'] = 1;
				}
				else
					$aux['mejorado'] = 0;

				$table1[$value['idvulnerabilidad']] = $aux;
			}
		}

		//Construimos la tabla2 ""
		foreach ($data as $key => $value) {
			$aux = [];

			if($value['danos'] == 'Si')
				$aux['tipo'] = $value['tipodanos'];
			else
				$aux['tipo'] = $value['tipo'];
			if($value['mantenimiento'] == 'Bueno' || $value['mantenimiento'] == 'Adecuado')
				$aux['tipo'] = $value['tipomejorado'];

			if( array_key_exists($value['idvulnerabilidad'].$aux['tipo'], $table2) )
				$table2[$value['idvulnerabilidad'].$aux['tipo']]['total']++;
			else{
				$aux['estructura'] = $value['muro'] . ' - ' . $value['techo'];
				$aux['total'] = 1;
				$table2[$value['idvulnerabilidad'].$aux['tipo']] = $aux;
			}
			$table2totales['total']++;
		}

		$tableanalytics = array(
					'1' => ['A'=>[],'B'=>[],'C'=>[],'D'=>[],'E'=>[],'F'=>[]],
					'2' => ['A'=>[],'B'=>[],'C'=>[],'D'=>[],'E'=>[],'F'=>[]],
					'3' => ['A'=>[],'B'=>[],'C'=>[],'D'=>[],'E'=>[],'F'=>[]],
					'4' => ['A'=>[],'B'=>[],'C'=>[],'D'=>[],'E'=>[],'F'=>[]],
					'5' => [
							'A'=>[ '1'=>0.15 ],
							'B'=>[ '1'=>0.15 ],
							'C'=>[ ],
							'D'=>[ ],
							'E'=>[ ],
							'F'=>[ ]
						],
					'6' => [
							'A'=>[ '1'=>0.55,'2'=>0.15, ],
							'B'=>[ '1'=>0.55,'2'=>0.15, ],
							'C'=>[ '1'=>0.15 ],
							'D'=>[ ],
							'E'=>[ ],
							'F'=>[ ]
						],
					'7' => [
							'A'=>[ '3'=>0.55,'4'=>0.15, ],
							'B'=>[ '2'=>0.55,'3'=>0.15, ],
							'C'=>[ '2'=>0.15 ],
							'D'=>[ '1'=>0.15 ],
							'E'=>[ ],
							'F'=>[ ]
						],
					'8' => [
							'A'=>[ '4'=>0.55,'5'=>0.15, ],
							'B'=>[ '3'=>0.55,'4'=>0.15, ],
							'C'=>[ '2'=>0.55,'3'=>0.15, ],
							'D'=>[ '2'=>0.15 ],
							'E'=>[ ],
							'F'=>[ ]
						],
					'9' => [
							'A'=>[ '5'=>0.55 ],
							'B'=>[ '4'=>0.55,'5'=>0.15, ],
							'C'=>[ '3'=>0.55,'4'=>0.15, ],
							'D'=>[ '2'=>0.55,'3'=>0.15, ],
							'E'=>[ '2'=>0.15 ],
							'F'=>[ ]
						],
					'10' => [
							'A'=>[ '5'=>0.1 ],
							'B'=>[ '5'=>0.55 ],
							'C'=>[ '4'=>0.55,'5'=>0.15, ],
							'D'=>[ '3'=>0.55,'4'=>0.15, ],
							'E'=>[ '2'=>0.55,'3'=>0.15, ],
							'F'=>[ '2'=>0.15 ]
						],
					'11' => [
							'A'=>[ ],
							'B'=>[ '5'=>1 ],
							'C'=>[ '4'=>1,'5'=>0.55 ],
							'D'=>[ '4'=>0.55,'5'=>0.15 ],
							'E'=>[ '3'=>0.55,'4'=>0.15 ],
							'F'=>[ '2'=>0.55,'1'=>0.15 ],
						],
					'12' => [
							'A'=>[ '5'=>1 ],
							'B'=>[ '5'=>1 ],
							'C'=>[ '5'=>1 ],
							'D'=>[ '5'=>1 ],
							'E'=>[ '5'=>1 ],
							'F'=>[ '5'=>1 ],
							
						],
					);
		
		// Table
		$table3 = $table2;
		foreach ($table3 as $key => $value) {
			$table3[$key]['dano1'] = 0;
			$table3[$key]['dano2'] = 0;
			$table3[$key]['dano3'] = 0;
			$table3[$key]['dano4'] = 0;
			$table3[$key]['dano5'] = 0;
			foreach ($tableanalytics[Input::only('fuentes')['fuentes']][ $table3[$key]['tipo'] ] as $key2 => $value2) {
				$table3[$key]['dano'.$key2] = round( $table3[$key]['total'] * $value2 );
			}
		}

		$datas['table1'] = $table1;
		$datas['table1totales'] = $table1totales;
		$datas['table2'] = $table2;
		$datas['table2totales'] = $table2totales;
		$datas['table3'] = $table3;
		return Response::json($datas);
	}
	
}