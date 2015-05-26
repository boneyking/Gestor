<?php namespace Gestor;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuarios';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id_usuario', 'id_tipo_usuario', 'nombre', 'apellido', 'email', 'password', 
							'edad', 'rut', 'dv', 'pregunta', 'respuesta', 'valido'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	//Defino que un usuario puede tener solo un tipo de usuario
	public function tipoUsuario(){
		return $this->hasOne('Gestor\TipoUsuario');
	}

}
