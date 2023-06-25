<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    use HasFactory;

    protected $table ='salida';

    public function conductor(){
        return $this->belongsTo(Conductor::class, 'id_conductor');
    }

    public function detalle_salida(){
        return $this->hasMany(DetalleSalida::class,'id_salida');
    }
}
