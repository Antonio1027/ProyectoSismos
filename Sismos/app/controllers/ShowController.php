<?php

use Sismos\Repositories\UserRepo;
use Sismos\Repositories\DirectoresRepo;
class ShowController extends BaseController {

	protected $userRepo, $directoresRepo;

	function __construct( UserRepo $userRepo, DirectoresRepo $directoresRepo){
		$this->userRepo = $userRepo;
		$this->directoresRepo = $directoresRepo;
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