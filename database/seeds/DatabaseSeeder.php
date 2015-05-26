<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Gestor\TipoUsuario;
use Gestor\Usuario;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();

		// $this->call('UserTableSeeder');

		//CON ESTO EVITA VERIFICAR QUE EXISTAN LLAVE FORANEAS
		DB::statement('SET FOREIGN_KEY_CHECKS=0');

		// se hace un truncate de las tablas cada vez que ejecutamos el seeder
		TipoUsuario::truncate();
		//Usuario::truncate();

		//importante es el orden de la llamada de las tablas
		$this->call('TipoUsuarioSeeder');
		$this->call('UsuarioSeeder');
	}

}
