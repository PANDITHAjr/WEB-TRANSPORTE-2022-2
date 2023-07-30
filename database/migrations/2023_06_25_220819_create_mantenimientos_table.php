<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMantenimientosTable extends Migration
{
    
    public function up()
    {
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('fecha');
            $table->string('monto');

            $table->unsignedBigInteger('id_vehiculo');
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');

            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('mantenimientos');
    }
}
