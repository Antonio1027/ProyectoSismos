<?php

use Sismos\Repositories\UserRepo;
use Sismos\Managers\UserUpdateManager;
class UpdateController extends BaseController {

	protected $userRepo;

	function __construct( UserRepo $userRepo){
		$this->userRepo = $userRepo;
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
}