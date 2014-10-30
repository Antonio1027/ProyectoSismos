<?php

class AuthController extends BaseController {
	public function authUser(){

		$data = Input::only('username', 'password', 'remember');

        $credentials = ['username' => $data['username'], 'password' => $data['password']];

        if (Auth::attempt($credentials, $data['remember'])){
            return Redirect::route('home');
        }
        return Redirect::back()->with('login_error', 1)->withInput();
	}

	public function logout(){
		Auth::logout();
        return Redirect::route('home');
	}
}