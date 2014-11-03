<?php 

namespace Sismos\Managers;

class RegistroUpdateManager extends BaseManager{

	public function getRules(){
		$rules= [
				'formato' => 'required|unique:construcciones,formato,'.$this->entity->id
				];

		return $rules;		
	}

	// public function prepareData($data){
	// 	$return $data;
	// }

}

 ?>