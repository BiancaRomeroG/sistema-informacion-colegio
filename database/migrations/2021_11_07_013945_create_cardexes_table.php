<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardexes', function (Blueprint $table) {
            $table->id()->from(100);
            $table->year('gestion');
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_alumno');
            $table->foreign('id_curso')->references('id')->on('cursos');
            $table->foreign('id_alumno')->references('id')->on('alumnos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardexes');
    }
}
