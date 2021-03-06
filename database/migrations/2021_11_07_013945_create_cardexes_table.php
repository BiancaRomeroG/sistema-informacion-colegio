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
            $table->id();
            $table->year('gestion');
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_alumno');
            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_alumno')->references('id')->on('alumnos')->onDelete('cascade')->onUpdate('cascade');
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
