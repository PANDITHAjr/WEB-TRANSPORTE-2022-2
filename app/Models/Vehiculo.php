<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table ='vehiculo';

    public function venta_boleto(){
        return $this->hasMany(VentaBoleto::class,'id_vehiculo');
    }
}
