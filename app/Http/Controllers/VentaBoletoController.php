<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Conductor;
use App\Models\Personal;
use App\Models\Vehiculo;
use App\Models\VentaBoleto;
use Illuminate\Http\Request;

class VentaBoletoController extends Controller
{

    public function index(){
        $ventas = VentaBoleto::all();
        return view('ventaboleto.index', compact('ventas'));

    }

    public function create(){

        $conductores = Conductor::all();
        $vehiculos = Vehiculo::all();
        $clientes = Cliente::all();
        $personales = Personal::all();
        return view('ventaboleto.create', compact('conductores', 'clientes', 'vehiculos', 'personales'));
    }

    public function store(Request $request){
        $ventas = new VentaBoleto();
        $ventas->numero_asiento = $request->input('numero_asiento');
        $ventas->precio = $request->input('precio');
        $ventas->fecha = $request->input('fecha');
        $ventas->id_vehiculo = $request->input('id_vehiculo');
        $ventas->id_cliente= $request->input('id_cliente');
        $ventas->id_personal = $request->input('id_personal'); 
        $ventas->save();


        return redirect()->route('ventaboleto.index');

    }

    public function edit($id){
        $venta = VentaBoleto::findOrFail($id);
        $conductores = Conductor::all();
        $vehiculos = Vehiculo::all();
        $clientes = Cliente::all();
        $personales = Personal::all();
        return view('ventaboleto.edit', compact('venta','conductores', 'clientes', 'vehiculos', 'personales'));
    }
    public function update(Request $request, $id){

        $ventas = VentaBoleto::findOrFail($id);
        $ventas->numero_asiento = $request->input('numero_asiento');
        $ventas->precio = $request->input('precio');
        $ventas->fecha = $request->input('fecha');
        $ventas->id_vehiculo = $request->input('id_vehiculo');
        $ventas->id_cliente= $request->input('id_cliente');
        $ventas->id_personal = $request->input('id_personal');
        $ventas->save();

        return redirect()->route('ventaboleto.index');
    }

    public function show($id){
        $venta = VentaBoleto::findOrFail($id);

        return view('ventaboleto.show', compact('venta'));

    }

    public function destroy($id){
        $venta = VentaBoleto::findOrFail($id);
        $venta->delete();

        return redirect()->route('ventaboleto.index');
    }
}
