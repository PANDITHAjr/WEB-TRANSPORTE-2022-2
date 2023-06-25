<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentaBoletoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venta_boleto', function (Blueprint $table) {
            $table->id();
            $table->string('numero_asiento');
            $table->float('precio');
            $table->date('fecha');
            $table->timestamps();

            $table->unsignedBigInteger('id_vehiculo');
            $table->foreign('id_vehiculo')->references('id')->on ('vehiculo')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('cliente')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('id_personal');
            $table->foreign('id_personal')->references('id')->on('personal')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venta_boleto');
    }
}
