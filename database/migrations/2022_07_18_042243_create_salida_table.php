<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salida', function (Blueprint $table) {
            $table->id();
            $table->string('hora');
            $table->date('fecha_salida');
            $table->string('destinos');
            $table->timestamps();

            $table->unsignedBigInteger('id_conductor');
            $table->foreign('id_conductor')->references('id')->on('conductor')->cascdeOnDelete()->cascadeOnUpdate;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salida');
    }
}
