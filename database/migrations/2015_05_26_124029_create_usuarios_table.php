<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id_usuario');
			$table->integer('id_tipo_usuario');
			$table->string('nombre',255);
			$table->string('apellido',255);
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->integer('edad');
			$table->integer('rut');
			$table->char('dv');
			$table->string('pregunta');
			$table->string('respuesta');
			$table->boolean('valido');
			$table->rememberToken();
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
		Schema::drop('usuarios');
	}

}
