<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleSalida extends Model
{
    use HasFactory;

    protected $table ='detalle_salida';

    public function salida(){
        return $this->belongsTo(Salida::class,'id_salida');
    }

    public function venta_boleto(){
        return $this->belongsTo(VentaBoleto::class,'id_venta_boleto');
    }
}
