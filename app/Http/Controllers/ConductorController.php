<?php

namespace App\Http\Controllers;


use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{

    public function index()
    {
        $conductores = Conductor::all();
        return view('conductor.index', compact('conductores'));

    }


    public function create()
    {
        return view('conductor.create');
    }


    public function store(Request $request)
    {
        $conductor = new Conductor();
        $conductor->ci = $request->input('ci');
        $conductor->nombre = $request->input('nombre');
        $conductor->apellido = $request->input('apellido');
        $conductor->edad = $request->input('edad');
        $conductor->telefono = $request->input('telefono');
        $conductor->direccion = $request->input('direccion');
        $conductor->save();

        return redirect()->route('conductor.index');
    }

    public function edit($id)
    {
        $conductor = Conductor::findOrFail($id);
        return view('conductor.edit', compact('conductor'));
    }

    public function update(Request $request, $id)
    {
        $conductor = Conductor::findOrFail($id);
        $conductor->ci = $request->input('ci');
        $conductor->nombre = $request->input('nombre');
        $conductor->apellido = $request->input('apellido');
        $conductor->edad = $request->input('edad');
        $conductor->telefono = $request->input('telefono');
        $conductor->direccion = $request->input('direccion');
        $conductor->save();


        return redirect()->route('conductor.index');
    }

    public function show($id)
    {
        $conductor = Conductor::findOrFail($id);
        return view('conductor.show', compact('conductor'));
    }


    public function destroy($id)
    {
        $conductor = Conductor::findOrFail($id);
        $conductor->delete();

        return redirect()->route('conductor.index');
    }
}
