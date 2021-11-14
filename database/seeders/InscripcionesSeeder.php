<?php

namespace Database\Seeders;

use App\Models\inscripciones;
use Illuminate\Database\Seeder;

class InscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fecha = ["2021/01/25", "2021/01/26", "2021/01/27", "2021/01/28", "2021/01/29"];
        $curso = 1;
        $id_admin = 100161;
        $id_alumno = 100100;
        $cant = 1;

        while ($id_alumno < 100130) {
            if ($cant > 5) {
                $curso++;
                $cant = 1;
            }

            $inscripcion = new inscripciones();
            $inscripcion->fecha = $fecha[rand(0, count($fecha) - 1)];
            $inscripcion->curso = $curso;
            $inscripcion->id_admin = $id_admin;
            $inscripcion->id_alumno = $id_alumno;
            $inscripcion->id_curso = $curso;
            $inscripcion->timestamps = false;
            $inscripcion->save();

            $cant++;
            $id_alumno++;
        }
    }
}
