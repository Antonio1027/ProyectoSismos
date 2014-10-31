<?php

namespace Sismos\Repositories;
use Sismos\Entities\Director;

class DirectoresRepo extends \Eloquent{
	public function newDirector(){
		$user = new Director();
	    return $user;		
	}
	public function deleteDirector($id){
		return Director::where('id', '=', $id)->delete();
	}
	public function findDirector($id){
		return Director::find($id);	
	}
	public function allDirectores(){
		return Director::all();	
	}
	public function listDirectores(){
		return Director::all()->lists('full_name','id');
	}
	public function findField($full_name){
		return Director::where('full_name','LIKE','%' . $full_name . '%')->orderBy('full_name', 'Asc')->get();		
	}	
}