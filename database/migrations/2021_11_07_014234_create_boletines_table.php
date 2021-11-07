<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletines', function (Blueprint $table) {
            $table->id('id_boletin')->autoIncrement()->from(1200);
            $table->year('anho');
            $table->tinyInteger('nro_trim');
            $table->unsignedBigInteger('id_cardex');
            $table->foreign('id_cardex')->references('id_cardex')->on('cardexes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boletines');
    }
}
