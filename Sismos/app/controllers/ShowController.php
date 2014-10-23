<?php
class ShowController extends BaseController {
	
	public function showHome(){
		return View::make('home');
	}
	public function showRegister(){
		return View::make('register');
	}	
	public function showConsult(){
		return View::make('Consult');
	}
}