<?php

namespace Database\Seeders;

use App\Models\usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cant_user_prof = 10;
        $user_c = 1;
        $password = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

        //usuario profesor
        while ($cant_user_prof > 0) {
            $user = new usuario();
            $user->nombre_usuario = "Profesor".strval($user_c);

            $pass = "";
            for ($i = 0; $i < 15; $i++) 
                $pass .= $password[rand(0, strlen($password) - 1)];

            $user->contrasenha = $pass;
            $user->id_rol = 102;
            $user->estado = 1;
            $user->save();

            $user_c++;
            $cant_user_prof--;
        }

        //profesor
        $user = new usuario();
        $user->nombre_usuario = "Secretaria";

        $pass = "";
        for ($i = 0; $i < 15; $i++) 
            $pass .= $password[rand(0, strlen($password) - 1)];

        $user->contrasenha = $pass;
        $user->id_rol = 101;
        $user->estado = 1;
        $user->save();

        //director
        $user = new usuario();
        $user->nombre_usuario = "Director";

        $pass = "";
        for ($i = 0; $i < 15; $i++) 
            $pass .= $password[rand(0, strlen($password) - 1)];

        $user->contrasenha = $pass;
        $user->id_rol = 100;
        $user->estado = 1;
        $user->save();
    }
}
