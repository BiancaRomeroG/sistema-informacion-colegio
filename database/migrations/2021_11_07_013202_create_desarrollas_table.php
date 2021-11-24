<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesarrollasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desarrollas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_materia');
            $table->unsignedBigInteger('id_curso');
            $table->year('gestion');
            $table->foreign('id_materia')->references('id')->on('materias');
            $table->foreign('id_curso')->references('id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desarrollas');
    }
}
