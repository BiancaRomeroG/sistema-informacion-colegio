<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id('id_nota')->autoIncrement();
            $table->tinyInteger('nro_trim');
            $table->tinyInteger('ser')->nullable();
            $table->tinyInteger('saber')->nullable();
            $table->tinyInteger('hacer')->nullable();
            $table->tinyInteger('decidir')->nullable();
            $table->tinyInteger('nota_trimestral');
            $table->unsignedBigInteger('id_materia');
            $table->unsignedBigInteger('id_boletin');
            $table->foreign('id_materia')->references('id_materia')->on('materias');
            $table->foreign('id_boletin')->references('id_boletin')->on('boletines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
