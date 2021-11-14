<?php

namespace Database\Seeders;

use App\Models\pagos;
use Illuminate\Database\Seeder;

class PagosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $monto_men = 400;
        $monto_adm = [3000, 3200];
        $fecha = ["2021/01/03", "2021/02/03", "2021/03/03", "2021/04/03", "2021/05/03", "2021/06/03"];
        $i = 20;
        //pagos de mensualidades
        while ($i > 0) {
            $pagos = new pagos();
            $pagos->monto = $monto_men;
            $pagos->fecha = $fecha[rand(0, count($fecha) - 1)];
            $pagos->timestamps = false;
            $pagos->save();
            $i--;
        }

        $i = 10;
        //pagos de salarios
        while ($i > 0) {
            $pagos = new pagos();
            $pagos->monto = $monto_adm[rand(0, count($monto_adm) - 1)];
            $pagos->fecha = $fecha[rand(0, count($fecha) - 1)];
            $pagos->timestamps = false;
            $pagos->save();
            $i--;
        }
    }
}
