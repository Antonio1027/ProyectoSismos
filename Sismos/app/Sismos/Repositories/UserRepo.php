<?php

namespace Sismos\Repositories;
use Sismos\Entities\User;

class UserRepo extends \Eloquent{
	public function newUser(){
		$user = new User();
	    return $user;		
	}
	public function deleteUser($id){
		return User::where('id', '=', $id)->delete();
	}
	public function findUser($id){
		return User::find($id);	
	}
	public function allUsers(){
		return User::all();	
	}
	public function findField($username, $type){
		return User::where('username','LIKE','%' . $username . '%')->where('type','LIKE','%' . $type . '%')->orderBy('username', 'Asc')->get();		
	}	
}