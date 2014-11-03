<?php

use Sismos\Repositories\UserRepo;
use Sismos\Repositories\DirectoresRepo;
use Sismos\Repositories\ConstruccionesRepo;

class UtilsController extends BaseController {

	protected $userRepo, $directoresRepo,$construccionesRepo;

	function __construct( UserRepo $userRepo, DirectoresRepo $directoresRepo,
						  ConstruccionesRepo $construccionesRepo){
		$this->userRepo = $userRepo;
		$this->directoresRepo = $directoresRepo;
		$this->construccionesRepo = $construccionesRepo;
	}
	public function searchUsers(){
		$username = Input::get('username');
		$type = Input::get('type');

		$users = $this->userRepo->findField($username, $type);
		return Response::json($users);
	}
	public function searchDirectores(){
		$full_name = Input::get('full_name');

		$directores = $this->directoresRepo->findField($full_name);
		return Response::json($directores);
	}
	public function searchRegistros(){		
		$formato = Input::get('formato');
		$director = Input::get('director');	

		$records = $this->construccionesRepo->findField($formato,$director);

		return Response::json($records);
	}
	
}