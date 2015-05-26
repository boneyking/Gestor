<?php namespace Gestor\Http\Controllers\Validacion;

use Gestor\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Gestor\Usuario;

class ValidacionController extends Controller
{
	
	protected $auth;


	function index(){
		//return "Vista de validacion";
		return view('validacion.login');
	}
}