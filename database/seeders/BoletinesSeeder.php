<?php

namespace Database\Seeders;

use App\Models\boletines;
use Illuminate\Database\Seeder;

class BoletinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $anho = 2021;
        $nro_trim = 1;
        $id_cardex = 100;

        while ($id_cardex < 130) {
            $boletin = new boletines();
            $boletin->anho = $anho;
            $boletin->nro_trim = $nro_trim;
            $boletin->id_cardex = $id_cardex;
            $boletin->timestamps = false;
            $boletin->save();

            $id_cardex++;
        }
    }
}
