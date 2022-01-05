<?php

namespace Database\Seeders;

use App\Models\usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new usuario();
        $usuario->nombre_usuario = 'profesor0';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 3;
        $usuario->estado = true;
        $usuario->save();
        
        $usuario = new usuario();
        $usuario->nombre_usuario = 'profesor1';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 3;
        $usuario->estado = true;
        $usuario->save();
            
        $usuario = new usuario();
        $usuario->nombre_usuario = 'profesor2';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 3;
        $usuario->estado = true;
        $usuario->save();
        
        $usuario = new usuario();
        $usuario->nombre_usuario = 'profesor3';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 3;
        $usuario->estado = true;
        $usuario->save();
        
        $usuario = new usuario();
        $usuario->nombre_usuario = 'profesor4';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 3;
        $usuario->estado = true;
        $usuario->save();
        
        $usuario = new usuario();
        $usuario->nombre_usuario = 'profesor5';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 3;
        $usuario->estado = true;
        $usuario->save();
        
        $usuario = new usuario();
        $usuario->nombre_usuario = 'profesor6';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 3;
        $usuario->estado = true;
        $usuario->save();
        
        $usuario = new usuario();
        $usuario->nombre_usuario = 'profesor7';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 3;
        $usuario->estado = true;
        $usuario->save();
        
        $usuario = new usuario();
        $usuario->nombre_usuario = 'profesor8';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 3;
        $usuario->estado = true;
        $usuario->save();
        
        $usuario = new usuario();
        $usuario->nombre_usuario = 'profesor9';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 3;
        $usuario->estado = true;
        $usuario->save();
        
        $usuario = new usuario();
        $usuario->nombre_usuario = 'Director';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 1;
        $usuario->estado = true;
        $usuario->save();
        
        $usuario = new usuario();
        $usuario->nombre_usuario = 'Secretaria';
        $usuario->contrasenha = Hash::make(env('APP_DEFAULT__PASSWORD', '12345678'));
        $usuario->id_rol = 2;
        $usuario->estado = true;
        $usuario->save();
        
    }
}
