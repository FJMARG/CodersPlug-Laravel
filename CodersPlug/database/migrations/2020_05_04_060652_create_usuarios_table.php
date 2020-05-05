<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('email', 100);
            $table->string('password', 255);
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('pregunta_secreta', 150);
            $table->string('respuesta_pregunta_secreta', 150);
            $table->unsignedBigInteger('perfil_id');
            $table->unsignedBigInteger('rol_id');
            $table->foreign('perfil_id')->references('id')->on('perfiles')->onUpdate('cascade') ->onDelete('cascade');
            $table->foreign('rol_id')->references('id')->on('roles')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
