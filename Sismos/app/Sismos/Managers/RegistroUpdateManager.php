<?php 

namespace Sismos\Managers;

class RegistroUpdateManager extends BaseManager{

	public function getRules(){
		$rules= [
				'formato' => 'required|unique:construcciones,formato,'.$this->entity->id
				];

		return $rules;		
	}

	public function moveImage($data){		
		$aux = explode('.',$data['image']->getClientOriginalName());
		$name = \Str::slug($aux[0].rand()).'.'.$aux[1];
		$data['image']->move('images', $name);
		$data['image'] = $name;
		return $data;
	}


	public function prepareData($data){
		if($data['vulnerabilidad_id'] == ''){
			unset($data['vulnerabilidad_id']);
			unset($data['tipo_techo']);
			unset($data['material_muro']);
		}
		if(isset($data['image'])){						
			$data = $this->moveImage($data);
		}
		return $data;
	}

}

 ?>