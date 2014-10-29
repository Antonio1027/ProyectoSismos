<?php
class ShowController extends BaseController {
	
	public function showHome(){
		return View::make('home');
	}
	public function showRegister(){
		return View::make('register');
	}	
	public function showAnalytics(){
		return View::make('analytics');
	}
	public function showConsultRecords(){
		return View::make('consultrecords');
	}
}