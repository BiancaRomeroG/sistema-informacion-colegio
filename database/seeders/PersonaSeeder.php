<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cant_alum = 30;          //cantidad de alumnos
        $alum_x_curso = 5;
        $nro_ci = "9834500";      //numero de carnet de alumnos
                                  //nombres de hombres
        $n_h = ["Juan", "Luis", "Pedro", "Felix", "Kevin", "Gabriel", "Roberto", "Victor"]; 
                                  //nombre de mujeres
        $n_m = ["Mariela", "Carla", "Juana", "Andrea", "Gabriela", "Ana Maria", "Victoria"];
                                  //apellidos
        $ap = ["Aguilera", "Cruz", "Perez", "Flores", "Ramirez", "Ribera", "Rojas", "Ayala", "Vidal", "Mejia", "Cabrera"];
        $a_nac = 2009;            //año de nacimiento
        $nro_tel = 76305000;
        $i = 0;
        //alumnos
        while ($cant_alum > 0) {
            $persona = new Persona();

            $random = rand(0,1);
            if ($random == 0) {         // condicional de hombre o mujer
                $persona->nombre = $n_h[rand(0, count($n_h) - 1)];
                $persona->sexo = 'M';
            }else{
                $persona->nombre = $n_m[rand(0, count($n_m) - 1)];
                $persona->sexo = 'F';
            }

            $persona->ci = $nro_ci;
            $persona->apellido_pat = $ap[rand(0, count($ap) - 1)];
            $persona->apellido_mat = $ap[rand(0, count($ap) - 1)];   
            
            if ($i < $alum_x_curso) {    //condicional de alumnos por curso
                $persona->fecha_nac = strval($a_nac)."/7/26";
                $i++;
            }else{
                $i = 1;
                $a_nac--;
                $persona->fecha_nac = strval($a_nac)."/7/26";
            }

            $persona->email = $persona->nombre.strval($cant_alum)."@gmail.com";
            $persona->direccion = "calle ".strval($cant_alum);
            $persona->telefono = strval($nro_tel);
            $persona->save();

            $nro_ci += 12;
            $nro_tel += 12;
            $cant_alum--;
        }

        //tutores
        $cant_tutor = 20;
        $nro_ci = 4589300;
        while ($cant_tutor > 0) {
            $persona = new Persona();

            $random = rand(0,1);
            if ($random == 0) {         // condicional de hombre o mujer
                $persona->nombre = $n_h[rand(0, count($n_h) - 1)];
                $persona->sexo = 'M';
            }else{
                $persona->nombre = $n_m[rand(0, count($n_m) - 1)];
                $persona->sexo = 'F';
            }

            $persona->ci = $nro_ci;
            $persona->apellido_pat = $ap[rand(0, count($ap) - 1)];
            $persona->apellido_mat = $ap[rand(0, count($ap) - 1)];
            $persona->fecha_nac = "1988/11/2";
            $persona->email = $persona->nombre."_".strval($cant_tutor)."tutor@gmail.com";
            $persona->direccion = "calle ".strval($cant_tutor);
            $persona->telefono = strval($nro_tel);
            $persona->save();

            $nro_ci += 12;
            $nro_tel += 12;
            $cant_tutor--;
        }

        //profesores
        $nro_prof = 10;
        $nro_ci = 4595300;
        while ($nro_prof > 0) {
            $persona = new Persona();

            $random = rand(0,1);
            if ($random == 0) {         // condicional de hombre o mujer
                $persona->nombre = $n_h[rand(0, count($n_h) - 1)];
                $persona->sexo = 'M';
            }else{
                $persona->nombre = $n_m[rand(0, count($n_m) - 1)];
                $persona->sexo = 'F';
            }

            $persona->ci = $nro_ci;
            $persona->apellido_pat = $ap[rand(0, count($ap) - 1)];
            $persona->apellido_mat = $ap[rand(0, count($ap) - 1)];
            $persona->fecha_nac = "1985/3/31";
            $persona->email = $persona->nombre."_".strval($nro_prof)."prof@gmail.com";
            $persona->direccion = "calle ".strval($nro_prof);
            $persona->telefono = strval($nro_tel);
            $persona->save();

            $nro_ci += 12;
            $nro_tel += 12;
            $nro_prof--;
        }

        //director
        $persona = new Persona();
        $persona->nombre = $n_h[rand(0, count($n_m) - 1)];
        $persona->sexo = 'M';
        $persona->ci = "3239196";
        $persona->apellido_pat = $ap[rand(0, count($ap) - 1)];
        $persona->apellido_mat = $ap[rand(0, count($ap) - 1)];
        $persona->fecha_nac = "1981/4/12";
        $persona->email = $persona->nombre."_".strval($nro_prof)."direc@gmail.com";
        $persona->direccion = "calle s/n";
        $persona->telefono = 79090000;
        $persona->save();   

        //secretaria
        $persona = new Persona();
        $persona->nombre = $n_m[rand(0, count($n_m) - 1)];
        $persona->sexo = 'F';
        $persona->ci = "4602283";
        $persona->apellido_pat = $ap[rand(0, count($ap) - 1)];
        $persona->apellido_mat = $ap[rand(0, count($ap) - 1)];
        $persona->fecha_nac = "1989/6/21";
        $persona->email = $persona->nombre."_".strval($nro_prof)."secre@gmail.com";
        $persona->direccion = "calle fil";
        $persona->telefono = 79012456;
        $persona->save();   
    }
}
