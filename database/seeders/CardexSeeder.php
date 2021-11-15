<?php

namespace Database\Seeders;

use App\Models\cardex;
use Illuminate\Database\Seeder;

class CardexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gestion = 2021;
        $id_curso = 1;
        $id_alumno = 100100;
        $alum_x_curso = [5, 5, 5, 5, 5, 5];

        while ($id_curso <= 6) {
            $i = 1;
            while ($i <= $alum_x_curso[$id_curso - 1]) {
                $cardex = new cardex();
                $cardex->gestion = $gestion;
                $cardex->id_curso = $id_curso;
                $cardex->id_alumno = $id_alumno;
                $cardex->timestamps = false;
                $cardex->save();

                $id_alumno++;
                $i++;
            }
            $id_curso++;
        }
    }
}
