<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use App\Models\Salida;
use Illuminate\Http\Request;

class SalidaController extends Controller
{

    public function index()
    {
        $salidas = salida::all();
        return view('salida.index', compact('salidas'));

    }


    public function create() {
        $conductores = Conductor::all();
        return view('salida.create', compact('conductores'));
    }


    public function store(Request $request)
    {
        $salida = new salida();
        $salida->hora = $request->input('hora');
        $salida->fecha_salida = $request->input('fecha_salida');
        $salida->destino = $request->input('destino');
        $salida->id_conductor = $request->input('id_conductor');
        $salida->save();

        return redirect()->route('salida.index');
    }

    public function edit($id)
    {
        $salida = salida::findOrFail($id);
        $conductores = Conductor::all();
        return view('salida.edit', compact('salida','conductores'));
    }

    public function update(Request $request, $id)
    {
        $salida = salida::findOrFail($id);
        $salida->hora = $request->input('hora');
        $salida->fecha_salida = $request->input('fecha_salida');
        $salida->destino = $request->input('destino');
        $salida->id_conductor = $request->input('id_conductor');


        $salida->save();

        return redirect()->route('salida.index');
    }

    public function show($id)
    {
        $salida = salida::findOrfail($id);

///////////hace la consulta con load desde el controlador, asi como las flechas de l index, pero mas eficiente
////
         // $salida->load(['detalle_salida.venta_boleto.cliente']);
        return view('salida.show', compact('salida'));

    }


    public function destroy($id)
    {
        $salida = salida::findOrfail($id);
        $salida->delete();

        return redirect()->route('salida.index');
    }
}
