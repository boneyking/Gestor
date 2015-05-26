<?php namespace Gestor;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model {

	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tipos_usuarios';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id_tipo_usuario','nombre_tipo', 'valido'];

	//Defino que un tipo de usuario puede tener varios usuarios a la vez
	public function usuarios(){
		return $this->hasMany('Gestor\Usuario');
	}
}
