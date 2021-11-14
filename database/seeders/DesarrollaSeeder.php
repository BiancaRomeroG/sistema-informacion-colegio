<?php

namespace Database\Seeders;

use App\Models\desarrolla;
use Illuminate\Database\Seeder;

class DesarrollaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_materia = 1;
        $id_curso = 1;
        $gestion = 2021;
        while ($id_curso <= 6) {
            while ($id_materia <= 10) {
                $desarrolla = new desarrolla();
                $desarrolla->id_materia = $id_materia;
                $desarrolla->id_curso = $id_curso;
                $desarrolla->gestion = $gestion;
                $desarrolla->timestamps = false;
                $desarrolla->save();

                $id_materia++;
            }
            $id_materia = 1;
            $id_curso++;
        }
    }
}
