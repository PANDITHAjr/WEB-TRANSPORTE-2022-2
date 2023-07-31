<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->integer('linea');
            $table->string('placa');
            $table->string('marca');
            $table->string('modelo');

            $table->unsignedBigInteger('id_personal');
            $table->unsignedBigInteger('id_sindicato');
            $table->foreign('id_personal')->references('id')->on('personal');
            $table->foreign('id_sindicato')->references('id')->on('sindicatos');

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
