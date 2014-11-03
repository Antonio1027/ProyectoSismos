<?php

use Sismos\Repositories\UserRepo;
use Sismos\Repositories\DirectoresRepo;
use Sismos\Repositories\ConstruccionesRepo;

class DeleteController extends BaseController {

	protected $userRepo, $directoresRepo,$construccionesRepo;

	function __construct( UserRepo $userRepo, DirectoresRepo $directoresRepo,
						  ConstruccionesRepo $construccionesRepo){
		$this->userRepo = $userRepo;
		$this->directoresRepo = $directoresRepo;
		$this->construccionesRepo = $construccionesRepo;
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
	public function deleteRegistro($id){
		if($this->construccionesRepo->deleteConstruccion($id)){
			// Session::flash('notifications','Registro eliminado');
			return Redirect::route('managerusers');
		}else{
			// Session::flash('notifications','No se pudo eliminar el registro');
			return Redirect::route('managerusers');
		}
	}
}