<?php 

namespace Sismos\Repositories;

use Sismos\Entities\Construccion;
use Sismos\Entities\Vulnerabilidad;

class ConstruccionesRepo extends \Eloquent{

	public function newConstruccion(){
		$construccion = new Construccion();		
		return $construccion;
	}
	public function allConstruccion(){
		return Construccion::all();
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
	public function findzonas($zona){
		return Construccion::where('zona','LIKE','%' . $zona . '%')
							->get();
	}

	public function getTechosList($muro){
		return Vulnerabilidad::where('muro','=',$muro)
							 ->orderBy('techo','Asc')
							 ->get();
	}
	public function getTechosIdList($id){
		return Vulnerabilidad::where('id','=',$id)
							 ->get();
	}
}