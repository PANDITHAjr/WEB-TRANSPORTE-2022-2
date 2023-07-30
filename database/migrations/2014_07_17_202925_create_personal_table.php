<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
   
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
            $table->char('cat_lic')->nullable();

            $table->unsignedBigInteger('id_tipopersonal');
            $table->unsignedBigInteger('id_sindicato');
            $table->foreign('id_tipopersonal')->references('id')->on('tipopersonal')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('id_sindicato')->references('id')->on('sindicatos')->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
