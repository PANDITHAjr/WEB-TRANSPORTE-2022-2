<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRutasTable extends Migration
{
    
    public function up()
    {
        Schema::create('rutas', function (Blueprint $table) {
            $table->id();
            $table->string('origen');
            $table->string('destino');
            $table->string('tarifa');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('rutas');
    }
}
