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
        $pago = new pagoSalarios();
        $pago->id_pago = 1;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 1;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id_pago = 2;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 2;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id_pago = 3;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 3;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id_pago = 4;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 4;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id_pago = 5;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 5;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id_pago = 6;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 6;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id_pago = 7;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 7;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id_pago = 8;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 8;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id_pago = 9;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 9;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id_pago = 10;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 10;
        $pago->timestamps = false;
        $pago->save();
    }
}
