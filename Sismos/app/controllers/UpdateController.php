<?php

use Sismos\Repositories\UserRepo;
use Sismos\Managers\UserUpdateManager;
use Sismos\Managers\RegistroUpdateManager;
use Sismos\Managers\DirectorManager;
use Sismos\Repositories\DirectoresRepo;
use Sismos\Repositories\ConstruccionesRepo;

class UpdateController extends BaseController {

		protected $userRepo, $directoresRepo,$construccionesRepo;

	function __construct( UserRepo $userRepo, DirectoresRepo $directoresRepo,
						  ConstruccionesRepo $construccionesRepo){
		$this->userRepo = $userRepo;
		$this->directoresRepo = $directoresRepo;
		$this->construccionesRepo = $construccionesRepo;
	}
	
	public function updateUser(){
		$iduser = Session::get('iduser');
		$user = $this->userRepo->findUser($iduser);

		$manager = new UserUpdateManager($user, Input::all());
		if($manager->save()){
			Session::flash('notifications','Usuario creado correctamente');
			return Redirect::route('managerusers');
		}
		return Redirect::back()->withInput()->withErrors($manager->getErrors());
		
		// Session::forget('iduser');
	}
	public function updateDirector(){
		$iddirector = Session::get('iddirector');
		$director = $this->directoresRepo->findDirector($iddirector);

		$manager = new DirectorManager($director, Input::all());
		if($manager->save()){
			Session::flash('notifications','Usuario creado correctamente');
			return Redirect::route('managerusers');
		}
		return Redirect::back()->withInput()->withErrors($manager->getErrors());
		
		// Session::forget('iduser');
	}

	public function updateRegistro(){				
		$registro = $this->construccionesRepo->findConstruccion(Session::get('idregistro'));		
		$manager = new RegistroUpdateManager($registro,Input::all());
		if($manager->save()){
			Session::flash('notifications','Registro actualizado');
			return Redirect::route('managerusers');		
		}
		return Redirect::back()->withInput()->withErrors($manager->getErrors());
	}
}