<?php 
namespace Sismos\Managers;

class UserCreateManager extends BaseManager{
	public function getRules(){
		$rules = [
					'username' 		=> 'required | unique:users,username',
					'password' 		=> 'required | confirmed',
					'password_confirmation' => 'required',
					'type' 			=> 'required | in:Administrador,Usuario experto,Usuario basico'
				];

		return $rules;
	}

	public function prepareData($data){
		$data['username'] = strip_tags($data['username']);
		$data['type'] = strip_tags($data['type']);
		$data['password'] = strip_tags($data['password']);
		return $data;
	}
}