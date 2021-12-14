<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\acciones;
use Illuminate\Support\Facades\Auth;
use DateTime;


class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'usuarios';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nombre_usuario',
       // 'email',
        'contrasenha',
        'id_rol',
        'estado',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'contrasenha',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    

    /**
 * Get the password for the user.
 *
 * @return string
 */
    public function getAuthPassword()
    {
    return $this->contrasenha;
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
          $user_name = Auth::user()->nombre_usuario;

          if ($accion == "login"){
            
            $acciones->descripcion = "Usuario ".$user_name." iniciando sesión";
          }
          if($accion == "logout"){
            
            $acciones->descripcion = "Usuario ".$user_name." cerrando sesión";
          }
        
          
          $acciones->save();
          
    
    }
    
}
