<?php namespace Gestor\Http\Controllers\Validacion;

use Gestor\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Gestor\Usuario;
use Gestor\Http\Request\InicioSesionRequest;

class ValidacionController extends Controller
{
	
	protected $auth;
	protected $registrar;

	public function __construct(Guard $auth, Registrar $registrar){
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'salida']);
	}

	public function index(){
		//return "Vista de validacion";
		return view('validacion.login');
	}

	public function inicioSesion(InicioSesionRequest $request){
		$credenciales = $request->only('email', 'password');

		if($this->auth->attempt($credenciales, $request->has('remember'))){
			return redirect()->intendend($this->redirectPath());
		}

		return redirect($this->loginPath())
		->withInput($request->only('email', 'remember'))
		->withErrors([
			'email' => $this->getFailedLoginMessage(),
			]);
	}

	public function redirectPath(){
		if(property_exists($this, 'redirectPath')){
			return $this->redirectPath;
		}

		return property_exists($this, 'redirectTo') ? $this->redirectTo: 'home';
	}

	public function salida(){
		$this->auth->logout();

		return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
	}

	public function missingMethod($parameters = array())
	{
		// Disparamos un error 404.
		abort(404); 
	}
}