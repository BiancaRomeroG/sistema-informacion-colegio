<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoSalariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_salarios', function (Blueprint $table) {
            $table->id('id_pagoSal');
            $table->tinyInteger('nro_pago');
            $table->decimal('descuento_iva', 8, 2, true)->nullable();
            $table->decimal('aporte_afp', 8, 2, true)->nullable();
            $table->unsignedBigInteger('id_profesor');
            $table->foreign('id_pagoSal')->references('id_pago')->on('pagos');
            $table->foreign('id_profesor')->references('id_profesor')->on('profesores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_salarios');
    }
}
