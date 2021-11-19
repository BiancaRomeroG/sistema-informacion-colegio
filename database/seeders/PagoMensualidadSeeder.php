<?php

namespace Database\Seeders;

use App\Models\pagoMensualidad;
use Illuminate\Database\Seeder;

class PagoMensualidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_pago = 1000;
        $nro_cuota = 1;
        $id_tutor = 100130;

        while ($id_pago < 1020) {
            $pago_men = new pagoMensualidad();
            $pago_men->id = $id_pago;
            $pago_men->nro_cuota = $nro_cuota;
            $pago_men->id_tutor = $id_tutor;
            $pago_men->timestamps = false;
            $pago_men->save();

            $id_tutor++;
            $id_pago++;
        }
    }
}
