<?php

use Sismos\Repositories\UserRepo;
use Sismos\Repositories\DirectoresRepo;
class UtilsController extends BaseController {

	protected $userRepo, $directoresRepo;

	function __construct( UserRepo $userRepo, DirectoresRepo $directoresRepo){
		$this->userRepo = $userRepo;
		$this->directoresRepo = $directoresRepo;
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
	
}