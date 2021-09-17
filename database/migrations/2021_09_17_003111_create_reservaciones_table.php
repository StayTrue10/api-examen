<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipo');
            $table->string('restaurante');
            $table->timestamps();
        });
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('inicio');
            $table->string('final');
            $table->timestamps();
        });
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();
            $table->string('rfc');
            $table->string('id_mesa');
            $table->string('id_horario');
            $table->string('factura');
            $table->string('folio');
            $table->timestamps();
        });
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('fecha');
            $table->string('correo');
            $table->string('numero');
            $table->string('rfc')->unique();
            $table->string('usuario');
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
        Schema::dropIfExists('reservaciones');
        Schema::dropIfExists('mesas');
        Schema::dropIfExists('horarios');
        Schema::dropIfExists('usuarios');
    }
}
