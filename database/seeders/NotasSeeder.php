<?php

namespace Database\Seeders;

use App\Models\notas;
use Illuminate\Database\Seeder;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nro_trim = 1;
        $id_materia = 1;
        $id_boletin = 1200;

        while ($id_boletin < 1230) {
            while ($id_materia <= 10) {
                $notas = new notas();
                $notas->nro_trim = $nro_trim;
                $notas->ser = rand(20, 100);
                $notas->saber = rand(20, 100);
                $notas->hacer = rand(20, 100);
                $notas->decidir = rand(20, 100);
                $notas->nota_trimestral = 
                    ($notas->ser + $notas->saber + $notas->hacer + $notas->decidir) / 4;
                $notas->id_materia = $id_materia;
                $notas->id_boletin = $id_boletin;
                $notas->timestamps = false;
                $notas->save();

                $id_materia++;
            }

            $id_materia = 1;
            $id_boletin++;
        }
    }
}
