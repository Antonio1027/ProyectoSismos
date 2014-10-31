<?php

use Sismos\Repositories\UserRepo;
use Sismos\Managers\UserCreateManager;
use Sismos\Managers\DirectorManager;
use Sismos\Repositories\DirectoresRepo;

class CreateController extends BaseController {

	protected $userRepo, $directoresRepo;

	function __construct( UserRepo $userRepo, DirectoresRepo $directoresRepo){
		$this->userRepo = $userRepo;
		$this->directoresRepo = $directoresRepo;
	}
	
	public function createRegister(){
		dd(Input::all());
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