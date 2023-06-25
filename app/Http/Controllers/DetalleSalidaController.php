<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\DetalleSalida;
use App\Models\Salida;
use App\Models\VentaBoleto;

class DetalleSalidaController extends Controller
{
    public function index()
    {
        $detalles = DetalleSalida::all();
        return view('detalle_salida.index',compact('detalles'));            
    }

    public function create()
    {
        $boletos = VentaBoleto::all();
        $salidas = Salida::all();
        return view('detalle_salida.create', compact('boletos','salidas'));
    }

    public function store(Request $request)
    {
        $detalle = new DetalleSalida();
        $detalle->id_salida= $request -> input('id_salida');
        $detalle->id_venta_boleto = $request -> input('id_venta_boleto');
        $detalle->save();

        return redirect()->route('detalle_salida.index');
    }

    public function show($id)
    {
        $detalle = DetalleSalida::findOrFail($id);
        return view('detalle_salida.show',compact('detalle'));
    }

    public function edit($id)
    {
        $detalle = DetalleSalida::findOrFail($id);
        $boletos = VentaBoleto::all();
        $salidas = Salida::all();
        return view('detalle_salida.edit',compact('detalle','boletos','salidas'));
    }

    public function update(Request $request, $id)
    {
        $detalle = DetalleSalida::findOrFail($id);
        $detalle->id_salida= $request -> input('id_salida');
        $detalle->id_venta_boleto = $request -> input('id_venta_boleto');
        $detalle->save();

        return redirect()->route('detalle_salida.index');
    }

    public function destroy($id)
    {
        $detalle = DetalleSalida::findOrFail($id);
        $detalle->delete();

        return redirect()->route('detalle_salida.index');
    }
}
