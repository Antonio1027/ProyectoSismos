<?php

use Sismos\Repositories\UserRepo;
class ShowController extends BaseController {

	protected $userRepo;

	function __construct( UserRepo $userRepo){
		$this->userRepo = $userRepo;
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
	public function showManagerUsers(){
		return View::make('managerusers');
	}
	public function showUpdateUser($id){
		Session::put('iduser', $id);
		$user = $this->userRepo->findUser($id);
		return View::make('updateuser',compact('user'));
	}
	public function showRegister(){
		return View::make('register');
	}	
	public function showAnalytics(){
		return View::make('analytics');
	}
	public function showConsultRecords(){
		return View::make('consultrecords');
	}
}