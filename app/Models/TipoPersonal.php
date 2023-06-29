<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersonal extends Model
{
    use HasFactory;

    protected $table ='tipopersonal';

    public function personal(){
        return $this->hasOne(Personal::class,'id_tipopersonal');
    }
}
