<?php

use Sismos\Repositories\UserRepo;
use Sismos\Managers\UserCreateManager;
use Sismos\Managers\DirectorManager;
use Sismos\Managers\ConstruccionManager;
use Sismos\Repositories\DirectoresRepo;
use Sismos\Repositories\ConstruccionesRepo;

class CreateController extends BaseController {

	protected $userRepo, $directoresRepo,$construccionesRepo;

	function __construct( UserRepo $userRepo, DirectoresRepo $directoresRepo,
						  ConstruccionesRepo $construccionesRepo){
		$this->userRepo = $userRepo;
		$this->directoresRepo = $directoresRepo;
		$this->construccionesRepo = $construccionesRepo;
	}
	
	public function createRegister(){
		$construccion = $this->construccionesRepo->newConstruccion();		
		$construccion->user_id = Auth::user()->id;		
		$manager = new ConstruccionManager($construccion,Input::all());
		if($manager->save()){
			// Session::flash('notifications','Registro creado correctamente');
			return Redirect::route('home');
		}
		else
			return Redirect::back()->withInput()->withErrors($manager->getErrors());	
	}
	public function createUser(){
		$user = $this->userRepo->newUser();
		$manager = new UserCreateManager($user, Input::all());
		if($manager->save()){
			// Session::flash('notifications','Usuario creado correctamente');
			return Redirect::route('managerusers');
		}
		return Redirect::back()->withInput()->withErrors($manager->getErrors());
	}
	public function createDirector(){
		$director = $this->directoresRepo->newDirector();		
		$manager = new DirectorManager($director, Input::all());
		if($manager->save()){
			// Session::flash('notifications','Usuario creado correctamente');
			return Redirect::route('managerusers');
		}
		return Redirect::back()->withInput()->withErrors($manager->getErrors());
	}
}