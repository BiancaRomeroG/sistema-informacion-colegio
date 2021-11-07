<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id('id_persona')->autoIncrement()->from(100100);
            $table->string('ci', 10);
            $table->string('nombre', 50);
            $table->string('apellido_pat', 50);
            $table->string('apellido_mat', 50);
            $table->enum('sexo', ['M', 'F']);
            $table->date('fecha_nac');
            $table->string('email', 100)->unique();
            $table->string('direccion', 100);
            $table->string('telefono', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
