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
	      $table->integer('formato');
	      $table->date('fecha_elaboracion');
	      $table->string('ciudad');       

	      //---------------datos generales-----------
	      $table->string('domicilio');
	      $table->integer('habitantes')->unsigned();
	      $table->integer('codigo_postal')->unsigned();     
	      $table->string('datos_gps');

	      $table->enum('inmueble',['Bajo','Económico','Elevado','Intermedio','Lujo']);
	      $table->enum('acabado',['Bajo','Económico','Elevado','Intermedio','Lujo']); 
	      $table->enum('zona',['1: Norte-Oriente','2: Norte-Poniente','3: Centro','4: Sur-Oriente','5: Sur-Poniente']);
	      $table->enum('posicion',['Esquina','Esquina libre a un lado','Esquina y libre ambos lados','Intermedia','Intermedia y libre de un lado','Libre']);
	      //juntas en centimetros
	      $table->float('jun_izq');
	      $table->float('jun_der');

	      //altura de construccion
	      $table->float('alt_izq');
	      $table->float('alt_der');

	      $table->integer('edad')->unsigned();
	      $table->integer('niveles')->unsigned();
	      $table->float('alt_entrepisos');
	      $table->string('uso');
	      $table->string('tipo_construccion');
	      $table->string('image')->nullable();
	      // -------------------------
	      // caracteristicas estructurales de los muros
	      $table->string('material_muro');
	      $table->float('espesor_muros');
	      $table->enum('repello',['Si','No','No se sabe']);
	      $table->enum('columnas',['Si','No','No se sabe']);
	      $table->string('densidad_muro');

	      // ---------------- cimentacion   
	      $table->enum('tipo_suelo',['A:Blando','B:Medio','C:Solido']);
	      $table->string('tipo_cimentacion');
	      //---------------cubiertas
	      $table->float('espesor_techo');
	      $table->string('tipo_techo');
	      $table->enum('tipo_piso',['Cemento','Concreto','Lozeta de barro','Marmol','Mozaico','Piso ceramico','Tierra']);
	      $table->string('pendiente');

	      //geometria
	      $table->float('largo');     
	      $table->float('ancho');
	      $table->float('alto');
	      $table->float('area');
	      //regularidad
	      $table->enum('reg_planta',['Alta','Baja','Buena','Intermedia','Media']);
	      $table->enum('reg_vertical',['Alta','Baja','Buena','Intermedia','Media']);

	      $table->enum('cambios_sistema',['Si','No','No se sabe']);
	      $table->enum('mantenimiento',['Adecuado','Bueno','Incompleto','Malo','Nulo']);
	      $table->enum('danos',['Si','No','No se sabe']);
	      $table->enum('reparaciones',['Si','No','No se sabe']);
	      $table->string('fenomeno');
	      $table->string('descripcion');
	      $table->enum('remodelaciones',['Si','No','No se sabe']);
	      $table->string('descripcion_danos');

	      //foreign keys                                                       
	      $table->integer('vulnerabilidad_id')->unsigned()->index();
	      $table->foreign('vulnerabilidad_id')->references('id')->on('vulnerabilidades');         
	      $table->integer('director_id')->unsigned()->index();
	      $table->foreign('director_id')->references('id')->on('directores');     
	      $table->integer('user_id')->unsigned()->index();
	      $table->foreign('user_id')->references('id')->on('users');      

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
