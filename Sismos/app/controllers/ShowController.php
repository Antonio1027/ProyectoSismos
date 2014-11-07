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
		return View::make('analytics');
	}
	public function showConsultRecords(){
		return View::make('consultrecords');
	}
}
