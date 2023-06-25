<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->string('ci');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('edad');
            $table->string('telefono');
            $table->string('direccion');
            $table->timestamps();

            $table->unsignedBigInteger('id_tipo_personal');
            $table->unsignedBigInteger('id_sindicato');
            $table->foreign('id_tipo_personal')->references('id')->on('tipo_personal')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_sindicato')->references('id')->on('sindicatos')->cascadeOnDelete()->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
