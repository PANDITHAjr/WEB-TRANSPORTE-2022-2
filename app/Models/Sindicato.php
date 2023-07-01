<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sindicato extends Model
{
    use HasFactory;

    protected $table = 'sindicatos';

    public function personal(){
        return $this->hasMany(Personal::class,'id_sindicato');
    }

    public function vehiculo(){
        return $this->hasMany(Vehiculo::class,'id_sindicato');
    }

    public function rutasindicato(){
        return $this->hasMany(Rutasindicato::class,'id_sindicato');
    }
}
