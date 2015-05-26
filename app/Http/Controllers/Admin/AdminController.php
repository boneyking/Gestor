<?php namespace Gestor\Http\Controllers\Admin;

use Gestor\Http\Controllers\Controller;
//use Auth;

/**
* Clase controladora que permite la administracion de los usuarios
*/
class AdminController extends Controller
{
	
	function __construct()
	{
		$this->middleware('auth');
	}

	function index(){
		return "Vista de Administración";
	}
}