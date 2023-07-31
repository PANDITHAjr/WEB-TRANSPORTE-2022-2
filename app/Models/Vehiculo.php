<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table ='vehiculos';

    public function sindicato(){
        return $this->belongsTo(Sindicato::class,'id_sindicato');
    }

    public function personal(){
        return $this->belongsTo(Personal::class,'id_personal');
    }

    public function mantenimiento(){
        return $this->hasMany(Mantenimiento::class,'id_vehiculo');
    }

}
