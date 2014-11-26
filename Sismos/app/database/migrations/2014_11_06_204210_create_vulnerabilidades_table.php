<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVulnerabilidadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vulnerabilidades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('muro');
			$table->string('techo');
			$table->enum('tipodanos',['A','B','C','D','E','F']);
			$table->enum('tipo',['A','B','C','D','E','F']);
			$table->enum('tipomejorado',['A','B','C','D','E','F']);
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
		Schema::drop('vulnerabilidades');
	}

}
