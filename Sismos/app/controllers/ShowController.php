<?php

use Sismos\Repositories\UserRepo;
use Sismos\Repositories\DirectoresRepo;
use Sismos\Repositories\ConstruccionesRepo;

class ShowController extends BaseController {

	protected $userRepo, $directoresRepo,$construccionesRepo;

	function __construct( UserRepo $userRepo, DirectoresRepo $directoresRepo,
						  ConstruccionesRepo $construccionesRepo){
		$this->userRepo = $userRepo;
		$this->directoresRepo = $directoresRepo;
		$this->construccionesRepo = $construccionesRepo;
	}
	
	public function showHome(){
		return View::make('home');
	}
	public function showLogin(){
		return View::make('login');
	}
	public function createUser(){
		return View::make('createuser');
	}
	public function createDirector(){
		return View::make('createdirector');
	}
	public function showManagerUsers(){
		$directores = [''=>'Director de proyecto'] + $this->directoresRepo->listDirectores();
		return View::make('managerusers',compact('directores'));
	}
	public function showUpdateUser($id){
		Session::put('iduser', $id);
		$user = $this->userRepo->findUser($id);
		return View::make('updateuser',compact('user'));
	}
	public function showUpdateDirector($id){
		Session::put('iddirector', $id);
		$director = $this->directoresRepo->findDirector($id);
		return View::make('updatedirector',compact('director'));
	}
	public function showUpdateRegistro($id){
		Session::put('idregistro',$id);
		$registro = $this->construccionesRepo->findConstruccion($id);		
		$directores = $this->directoresRepo->listDirectores();
		$vulnerabilidad = $this->construccionesRepo->getTechosIdList($registro->vulnerabilidad_id);
		unset($directores[3]);					

		return View::make('updateregistro',compact('registro','directores','vulnerabilidad'));
	}
	public function showRegister(){
		$directores = [''=>'Seleccione opción'] + $this->directoresRepo->listDirectores();
		return View::make('register',compact('directores'));
	}	
	public function showAnalytics(){

		$data = [];
		$table1 = [];
		$table2 = [];
		$table3 = [];
		$table1totales = array('totalsindaños' => 0, 'totalcondaños' => 0, 'totalmejorados' => 0, 'totales' => 0, );
		$table2totales = array('total' => 0 );
		$table3totales = array('total' => 0 );

		// Obtenemos y agrupamos
		if(Input::all())
			$registros = $this->construccionesRepo->findzonas(Input::only('zonas')['zonas']);
		else
			$registros = $this->construccionesRepo->allConstruccion();
		foreach ($registros as $key => $value) {
			$aux = [];
			$aux['idvulnerabilidad'] = $value->vulnerabilidad->id;
			$aux['muro'] = $value->vulnerabilidad->muro;
			$aux['techo'] = $value->vulnerabilidad->techo;
			$aux['daños'] = $value->danos;
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
				if($value['daños'] == 'Si'){
					$table1totales['totalcondaños']++;
					$table1[$value['idvulnerabilidad']]['condaños'] ++;
				}
				else{
					$table1totales['totalsindaños']++;
					$table1[$value['idvulnerabilidad']]['sindaños'] ++;
				}

				if($value['mantenimiento'] == 'Bueno' || $value['mantenimiento'] == 'Adecuado'){
					$table1totales['totalmejorados']++;
					$table1[$value['idvulnerabilidad']]['mejorado'] ++;
				}
			}
			else{
				$aux['id'] = $value['muro'] . ' - ' . $value['techo'];
				$aux['total'] = 1;
				if($value['daños'] == 'Si'){
					$aux['condaños'] = 1;
					$aux['sindaños'] = 0;
					$table1totales['totalcondaños']++;
				}
				else{
					$aux['condaños'] = 0;
					$aux['sindaños'] = 1;
					$table1totales['totalsindaños']++;
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

			if($value['daños'] == 'Si')
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
		
		if(Input::all()){
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
			return View::make('analytics', compact('table1', 'table1totales', 'table2','table2totales', 'table3'));
		}
		return View::make('analytics', compact('table1', 'table1totales', 'table2','table2totales'));
	}
	public function showConsultRecords(){
		return View::make('consultrecords');
	}
}
