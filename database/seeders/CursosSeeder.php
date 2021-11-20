<?php

namespace Database\Seeders;

use App\Models\cursos;
use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new cursos();
        $curso->nivel = '1';
        $curso->cupo_max = 30;
        $curso->cant_alumnos = 5;
        $curso->timestamps = false;
        $curso->save();
        
        $curso = new cursos();
        $curso->nivel = '2';
        $curso->cupo_max = 30;
        $curso->cant_alumnos = 5;
        $curso->timestamps = false;
        $curso->save();
        
        $curso = new cursos();
        $curso->nivel = '3';
        $curso->cupo_max = 30;
        $curso->cant_alumnos = 5;
        $curso->timestamps = false;
        $curso->save();
        
        $curso = new cursos();
        $curso->nivel = '4';
        $curso->cupo_max = 30;
        $curso->cant_alumnos = 5;
        $curso->timestamps = false;
        $curso->save();
        
        $curso = new cursos();
        $curso->nivel = '5';
        $curso->cupo_max = 30;
        $curso->cant_alumnos = 5;
        $curso->timestamps = false;
        $curso->save();
        
        $curso = new cursos();
        $curso->nivel = '6';
        $curso->cupo_max = 30;
        $curso->cant_alumnos = 5;
        $curso->timestamps = false;
        $curso->save();
    }
}
