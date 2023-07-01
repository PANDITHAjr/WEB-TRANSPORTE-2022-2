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

    public function Vehiculo(){
        return $this->hasOne(Vehiculo::class,'id_personal');
    }

    public function tipo_personal(){
        return $this->belongsTo(TipoPersonal::class,'id_tipopersonal');
    }

    public function sindicato(){
        return $this->belongsTo(Sindicato::class,'id_sindicato');
    }
}
