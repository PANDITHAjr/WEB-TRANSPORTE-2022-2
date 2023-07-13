<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\TipoPersonal;
use App\Models\Sindicato;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function percli()
    {
        $personales = Personal::all();
        return view('cliente.index', compact('personales'));
    }
}
