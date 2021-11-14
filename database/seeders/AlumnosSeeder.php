<?php

namespace Database\Seeders;

use App\Models\alumnos;
use Illuminate\Database\Seeder;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_alum = 100100;
        $cod_rude = 1027729800;
        $id_tutor = 100130;

        while ($id_alum < 100130) {
            $alumno = new alumnos();
            $alumno->id_alumno = $id_alum;
            $alumno->cod_rude = $cod_rude;
            $alumno->id_tutor = $id_tutor;
            $alumno->save();

            $id_tutor++;
            if ($id_tutor >= 100150)
                $id_tutor = 100130;

            $cod_rude += 12;
            $id_alum++;
        }
    }
}
