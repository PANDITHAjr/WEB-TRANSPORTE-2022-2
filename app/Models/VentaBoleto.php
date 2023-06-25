<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaBoleto extends Model
{
    use HasFactory;

    protected $table ='venta_boleto';

    public function personal(){
        return $this->belongsTo(Personal::class,'id_personal');
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class,'id_cliente');
    }

    public function vehiculo(){
        return $this->belongsTo(Vehiculo::class,'id_vehiculo');
    }

    public function detalle_salida(){
        return $this->hasMany(DetalleSalida::class,'id_venta_boleto');
    }
}
