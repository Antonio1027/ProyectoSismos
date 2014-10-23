<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConstruccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('construcciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('formato');
			$table->date('fecha_elaboracion');

			//---------------datos generales-----------
			$table->string('domicilio');
			$table->integer('habitantes')->unsigned();
			$table->integer('codigo_postal')->unsigned();			
			$table->string('datos_gps');

			//juntas en centimetros
			$table->float('jun_izq');
			$table->float('jun_der');

			//altura de construccion
			$table->float('alt_izq');
			$table->float('alt_der');

			$table->integer('edad');
			$table->integer('niveles');
			$table->float('alt_entrepisos');
			$table->string('img');
			// -------------------------
			// caracteristicas estructurales de los muros

			$table->float('espesor_muros');
			$table->enum('repello',['SI','NO','NO SE SABE']);
			$table->enum('columnas',['SI','NO','NO SE SABE']);

			// ----------------	cimentacion		
			$table->enum('tipo_suelo',['MATERIAL A','MATERIAL B','MATERIAL C']);
			//---------------cubiertas
			$table->float('espesor_techo');
			$table->enum('pendiente',['<5%','>5%']);

			//geometria
			$table->float('largo');			
			$table->float('ancho');
			$table->float('alto');
			$table->float('area');

			$table->enum('cambios_sistema',['SI','NO','NO SE SABE']);
			$table->enum('mantenimiento',['BUENO','MALO','INCOMPLETO','NULO']);
			$table->enum('danos',['SI','NO','NO SE SABE']);
			$table->enum('reparaciones',['SI','NO','NO SE SABE']);
			$table->string('descripcion');
			$table->enum('remodelaciones',['SI','NO','NO SE SABE']);
			$table->string('descripcion_danos');


			//foreign keys			
			$table->integer('inmueble');
			$table->integer('acabado');
			$table->integer('ubicacion');
			$table->integer('posicion');
			$table->integer('tipo_construccion');

			$table->integer('tipo_techo');
			$table->integer('tipo_piso');

			$table->integer('material');
			$table->integer('densidad');
			$table->integer('tipo_cimentacion');

			//regularidad
			$table->integer('planta');
			$table->integer('vertical');

			$table->integer('fenomeno');


			$table->integer('ciudad_id')->unsigned()->index();
			// $table->foreign('ciudad_id')->references('id')->on('ciudades');
			$table->integer('director_id')->unsigned()->index();
			// $table->foreign('director_id')->references('id')->on('directores');
			$table->integer('encuestador_id')->unsigned()->index();
			// $table->foreign('encuestador_id')->references('id')->on('encuestadores');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('construcciones');
	}

}
