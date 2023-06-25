<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table ='personal';


    public function user(){
        return $this->hasOne(User::class,'id_personal');
    }

    public function tipo_personal(){
        return $this->belongsTo(TipoPersonal::class,'id_tipo_personal');
    }

    public function venta_boleto(){
        return $this->hasMany(VentaBoleto::class,'id_personal');
    }
}
