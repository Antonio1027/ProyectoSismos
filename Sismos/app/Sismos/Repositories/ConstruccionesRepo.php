<?php 

namespace Sismos\Repositories;

use Sismos\Entities\Construccion;

class ConstruccionesRepo extends \Eloquent{

	public function newConstruccion(){
		$construccion = new Construccion();		
		return $construccion;
	}

	public function deleteConstruccion($id){
		return Construccion::where('id', '=', $id)->delete();
	}

	public function findField($formato,$director){
		return Construccion::where('director_id','LIKE','%' . $director . '%')
							 ->where('formato','LIKE','%' . $formato . '%')
					 		 ->orderBy('formato', 'Asc')->get();		
	}

	public function findConstruccion($id){
		return Construccion::find($id);
	}

}

 ?>