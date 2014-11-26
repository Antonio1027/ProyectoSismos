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
		$table1totales = array('totalsindaños' => 0, 'totalcondaños' => 0, 'totalmejorados' => 0, 'totales' => 0, );
		$table2totales = array('total' => 0 );

		// Obtenemos y agrupamos
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
		return View::make('analytics', compact('table1', 'table1totales', 'table2','table2totales'));
	}
	public function showConsultRecords(){
		return View::make('consultrecords');
	}
}
