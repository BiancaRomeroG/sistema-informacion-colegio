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
            $table->id();
            $table->unsignedBigInteger('id_pago');
            $table->tinyInteger('nro_cuota');
            $table->unsignedBigInteger('id_tutor');
            $table->foreign('id_pago')->references('id')->on('pagos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_tutor')->references('id')->on('tutores')->onDelete('cascade')->onUpdate('cascade');
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
