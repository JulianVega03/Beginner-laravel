<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id('cedula');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('fecha_nacimiento');
            $table->integer('telefono');
            $table->string('email');
            $table->string('direccion');
            $table->string('tipo_sangre');
            
            $table->unsignedInteger('tipo_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
