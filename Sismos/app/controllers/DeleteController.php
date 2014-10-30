<?php

use Sismos\Repositories\UserRepo;
class DeleteController extends BaseController {

	protected $userRepo;

	function __construct( UserRepo $userRepo){
		$this->userRepo = $userRepo;
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
}