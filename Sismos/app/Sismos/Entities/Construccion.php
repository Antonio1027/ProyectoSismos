<?php

namespace Sismos\Entities;

class Construccion extends \Eloquent {
	protected $fillable = [
							'formato',
							'director_id',
							'fecha_elaboracion',
							'ciudad',
							'domicilio',
							'habitantes',
							'codigo_postal',
							'inmueble',
							'acabado',
							'zona',
							'datos_gps',
							'posicion',
							'jun_izq',
							'jun_der',
							'alt_izq',
							'alt_der',
							'edad',
							'niveles',
							'alt_entrepisos',
							'uso',
							'tipo_construccion',
							'image',
							'espesor_muros',
							'repello',
							'columnas',
							'densidad_muro',
							'tipo_suelo',
							'tipo_cimentacion',
							'espesor_techo',
							'tipo_piso',
							'pendiente',
							'largo',
							'reg_planta',
							'ancho',
							'reg_vertical',
							'alto',
							'area',
							'cambios_sistema',
							'descripcion',
							'danos',
							'descripcion_danos',
							'mantenimiento',
							'fenomeno',
							'reparaciones',
							'remodelaciones',
							'material_muro',
							'tipo_techo',
							'vulnerabilidad_id'
						  ];
	protected $table = 'construcciones';

	public function director(){
		return $this->belongsTo('Sismos\Entities\Director');
	}		  
	public function user(){
		return $this->belongsTo('Sismos\Entities\User');
	}	
}