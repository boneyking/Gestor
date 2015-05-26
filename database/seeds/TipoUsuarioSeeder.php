<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Gestor\TipoUsuario;
use Gestor\Usuario;

class TipoUsuarioSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		TipoUsuario::create([
			'nombre_tipo' => "Administrador",
			'valido' => 1
		]);
	}

}
