<?php 
namespace Sismos\Managers;

class DirectorManager extends BaseManager{
	public function getRules(){
		$rules = [
					'full_name' => 'required | unique:directores,full_name,' . $this->entity->id,
				];

		return $rules;
	}

	public function prepareData($data){
		$data['full_name'] = strip_tags($data['full_name']);
		return $data;
	}
}