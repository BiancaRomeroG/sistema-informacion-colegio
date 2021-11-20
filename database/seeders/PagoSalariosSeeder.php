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
        $pago->id = 1;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 61;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id = 2;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 62;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id = 3;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 63;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id = 4;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 64;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id = 5;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 65;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id = 6;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 66;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id = 7;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 67;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id = 8;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 68;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id = 9;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 69;
        $pago->timestamps = false;
        $pago->save();
        
        $pago = new pagoSalarios();
        $pago->id = 10;
        $pago->nro_pago = 1;
        $pago->descuento_iva = null;
        $pago->aporte_afp = null;
        $pago->id_profesor = 70;
        $pago->timestamps = false;
        $pago->save();
        
    }
}
