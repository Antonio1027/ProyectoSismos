<?php 

namespace Sismos\Managers;

class ConstruccionManager extends BaseManager{

	public function getRules(){
			$rules = [
						'formato'	 		=>	'required|numeric|unique:construcciones',
						'director_id'		=>	'required',
						'fecha_elaboracion' =>	'required|date',
						'ciudad'			=>	'required'
						// 'domicilio'			=>	'',
						// 'habitantes'		=>	'',
						// 'codigo_postal'		=>	'',
						// 'inmueble'			=>	'',
						// 'acabado'			=>	'',
						// 'zona'				=>	'',
						// 'posicion'			=>	'',
						// 'jun_izq'			=>	'',
						// 'jun_der'			=>	'',
						// 'alt_izq'			=>	'',
						// 'alt_der'			=>	'',
						// 'edad'				=>	'',
						// 'niveles'			=>	'',
						// 'alt_entrepisos'	=>	'',
						// 'uso'				=>	'',
						// 'tipo_construccion'	=>	'',
						// 'image'				=>	'',
						// 'espesor_muros'		=>	'',
						// 'repello'			=>	'',
						// 'columnas'			=>	'',
						// 'material_muro'		=>	'',
						// 'densidad_muro'		=>	'',
						// 'tipo_suelo'		=>	'',
						// 'tipo_cimentacion'	=>	'',
						// 'espesor_techo'		=>	'',
						// 'tipo_techo'		=>	'',
						// 'tipo_piso'			=>	'',
						// 'pendiente'			=>	'',
						// 'largo'				=>	'',
						// 'reg_planta'		=>	'',
						// 'ancho'				=>	'',
						// 'reg_vertical'		=>	'',
						// 'alto'				=>	'',
						// 'area'				=>	'',
						// 'cambios_sistema'	=>	'',
						// 'descripcion'		=>	'',
						// 'danos'				=>	'',
						// 'descripcion_danos'	=>	'',
						// 'mantenimiento'		=>	'',
						// 'fenomeno'			=>	'',
						// 'reparaciones'		=>	'',
						// 'remodelaciones'	=>	''
					 ];	
		return $rules;
	}
	public function prepareData($data){		
		$data['formato'] = strip_tags($data['formato']);
		$data['director_id'] = strip_tags($data['director_id']);
		$data['fecha_elaboracion'] = strip_tags($data['fecha_elaboracion']);
		$data['ciudad'] = strip_tags($data['ciudad']);
		return $data;
	}

}

 ?>