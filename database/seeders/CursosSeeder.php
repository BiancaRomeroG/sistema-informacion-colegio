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
        $cant_curso = 6;
        $cupo_max = 30;
        $cant_alum = 5;
        $i = 1;
        while ($i <= $cant_curso) {
            $curso = new cursos();
            $curso->nivel = strval($i);
            $curso->cupo_max = $cupo_max;
            $curso->cant_alumnos = $cant_alum;
            $curso->timestamps = false;
            $curso->save();

            $i++;
        }
    }
}
