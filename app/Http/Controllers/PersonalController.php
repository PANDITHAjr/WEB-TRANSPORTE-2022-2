<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\TipoPersonal;
use App\Models\Sindicato;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personales = Personal::all();
        return view('personal.index', compact('personales'));
    }

    public function create(){
        $tipopersonal = TipoPersonal::all();
        $sindicato = Sindicato::all();
        return view('personal.create', compact('tipopersonal'), compact('sindicato'));
    }
    public function store(Request $request)
    {
        $personal = new Personal();
        $personal->ci = $request->input('ci');
        $personal->nombre = $request->input('nombre');
        $personal->apellido = $request->input('apellido');
        $personal->edad = $request->input('edad');
        $personal->telefono = $request->input('telefono');
        $personal->direccion = $request->input('direccion');
        $personal->cat_lic = $request->input('cat_lic');
        $personal->id_tipopersonal = $request->input('id_tipopersonal');
        $personal->id_sindicato = $request->input('id_sindicato');
        $personal->save();

        return redirect()->route('personal.index', $personal->id);
    }
    public function show($id)
    {
        $personal = Personal::findOrFail($id);
        return view('personal.show', compact('personal'));
    }

    public function edit($id)
    {

        $personal = Personal::findOrFail($id);
        $tipopersonal = TipoPersonal::all();
        $sindicato = Sindicato::all();
        return view('personal.edit', compact('personal', 'tipopersonal'), compact('personal', 'sindicato'));
    }
    public function update(Request $request, $id)
    {
        $personal = Personal::findOrFail($id);
        $personal->ci = $request->input('ci');
        $personal->nombre = $request->input('nombre');
        $personal->apellido = $request->input('apellido');
        $personal->edad = $request->input('edad');
        $personal->telefono = $request->input('telefono');
        $personal->direccion = $request->input('direccion');
        $personal->cat_lic = $request->input('cat_lic');
        $personal->id_tipopersonal = $request->input('id_tipopersonal');
        $personal->id_sindicato = $request->input('id_sindicato');
        $personal->save();

        return redirect()->route('personal.index');
    }
    public function destroy($id)
    {
        $personal = Personal::findOrFail($id);
        $personal->delete();

        return redirect()->route('personal.index');
    }
}
