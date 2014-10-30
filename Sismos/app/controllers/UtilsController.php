<?php

use Sismos\Repositories\UserRepo;
class UtilsController extends BaseController {

	protected $userRepo;

	function __construct( UserRepo $userRepo){
		$this->userRepo = $userRepo;
	}

	public function searchUsers(){
		$username = Input::get('username');
		$type = Input::get('type');

		$users = $this->userRepo->findField($username, $type);
		return Response::json($users);
	}
	
}