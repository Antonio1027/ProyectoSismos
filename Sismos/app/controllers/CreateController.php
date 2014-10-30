<?php

use Sismos\Repositories\UserRepo;
use Sismos\Managers\UserCreateManager;

class CreateController extends BaseController {

	protected $userRepo;

	function __construct( UserRepo $userRepo){
		$this->userRepo = $userRepo;
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
}