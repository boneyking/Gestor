<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Gestor\TipoUsuario;
use Gestor\Usuario;

class UsuarioSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$tipos = TipoUsuario::all();
		foreach ($tipos as $tipo) {
			Usuario::create([
				'id_tipo_usuario' => $tipo->id_tipo_usuario,
				'nombre' => "Fabricio",
				'apellido' => "Tello",
				'email' => "fatel@fatel.cl",
				'password' => bcrypt("123456"),
				'edad' => 31,
				'rut' => 15789559,
				'dv' => 1,
				'pregunta' => "hola",
				'respuesta' => "chao",
				'valido' => 1
			]);
		}
		
	}

}
