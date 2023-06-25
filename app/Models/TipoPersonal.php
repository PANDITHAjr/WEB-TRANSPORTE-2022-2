<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersonal extends Model
{
    use HasFactory;

    protected $table ='tipo_personal';

    public function personal(){
        return $this->hasOne(Personal::class,'id_tipo_personal');
    }
}
