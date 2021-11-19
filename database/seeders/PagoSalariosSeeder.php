<?php

namespace Database\Seeders;

use App\Models\pagoSalarios;
use Illuminate\Database\Seeder;

class PagoSalariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_pago = 1020;
        $nro_pago = 1;
        $id_prof = 100150;

        while ($id_pago < 1030) {
            $pago_Sal = new pagoSalarios();
            $pago_Sal->id = $id_pago;
            $pago_Sal->nro_pago = $nro_pago;
            $pago_Sal->descuento_iva = null;
            $pago_Sal->aporte_afp = null;
            $pago_Sal->id_profesor = $id_prof;
            $pago_Sal->timestamps = false;
            $pago_Sal->save();

            $id_prof++;
            $id_pago++;
        }
    }
}
