<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoMensualidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_mensualidads', function (Blueprint $table) {
            $table->id('id_pagoMen');
            $table->tinyInteger('nro_cuota');
            $table->unsignedBigInteger('id_tutor');
            $table->foreign('id_pagoMen')->references('id_pago')->on('pagos');
            $table->foreign('id_tutor')->references('id_tutor')->on('tutores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_mensualidads');
    }
}
