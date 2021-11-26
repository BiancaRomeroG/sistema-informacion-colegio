<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\acciones;
use Illuminate\Support\Facades\Auth;
use DateTime;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'nombre_usuario';
    }

    public function registrarBitacora($accion){
        
        /*  $acciones = acciones::create([
              'id_usuario' => Auth::user()->getAuthIdentifier,
              'fecha' => new DateTime('now'),
              'descripcion' => "Usuario {$request->user_name}logueado",
          ]);*/
          $acciones = new acciones();
          
          $acciones->id_usuario=  Auth::user()->getAuthIdentifier();
          $acciones->fecha = new DateTime('now');


          if ($accion == "login"){
            $user_name = Auth::user()->nombre_usuario;
            $acciones->descripcion = "Usuario ".$user_name." iniciando sesión";
          }
          if($accion == "logout"){
            $user_name = Auth::user()->nombre_usuario;
            $acciones->descripcion = "Usuario ".$user_name." cerrando sesión";
          }
        
          
          
          $acciones->save();
          
      }

     
   
}
