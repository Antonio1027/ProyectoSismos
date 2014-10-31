<?php

use Sismos\Repositories\UserRepo;
use Sismos\Repositories\DirectoresRepo;
class DeleteController extends BaseController {

	protected $userRepo, $directoresRepo;

	function __construct( UserRepo $userRepo, DirectoresRepo $directoresRepo){
		$this->userRepo = $userRepo;
		$this->directoresRepo = $directoresRepo;
	}
	
	public function deleteUser($id){
		if( $this->userRepo->deleteUser($id) ){
			// Session::flash('notifications','Usuario eliminado');
			return Redirect::route('managerusers');
		}else{
			// Session::flash('notifications','No se pudo eliminar el usuario');
			return Redirect::route('managerusers');
		}
	}
	public function deleteDirector($id){
		if( $this->directoresRepo->deleteDirector($id) ){
			// Session::flash('notifications','Usuario eliminado');
			return Redirect::route('managerusers');
		}else{
			// Session::flash('notifications','No se pudo eliminar el usuario');
			return Redirect::route('managerusers');
		}
	}
}