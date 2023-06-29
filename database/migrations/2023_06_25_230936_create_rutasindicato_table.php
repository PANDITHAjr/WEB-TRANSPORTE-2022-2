<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutaSindicatoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutasindicato', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_ruta');
            $table->unsignedBigInteger('id_sindicato');
            $table->foreign('id_ruta')->references('id')->on('rutas');
            $table->foreign('id_sindicato')->references('id')->on('sindicatos');

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
        Schema::dropIfExists('rutasindicato');
    }
}
