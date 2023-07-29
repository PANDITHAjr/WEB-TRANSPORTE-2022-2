<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Personal;
use App\Models\Sindicato;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{

    public function index(Request $request)
    {
        // $vehiculos = Vehiculo::all();
        // return view('vehiculo.index', compact('vehiculos'));

        $buscar = $request->input('buscar');
        $refrescar = $request->input('refrescar');

        $vehiculos = Vehiculo::query();
        if($buscar){
            $vehiculos->where('placa', 'like', "%$buscar%")
            ->orWhere('modelo','like',"%$buscar%");
        }
        $vehiculos = $vehiculos->get();

        if($refrescar){
            $vehiculos = Vehiculo::all();
        }

        return view('vehiculo.index', compact('vehiculos'));

    }


    public function create()
    {
        $personal = Personal::all();
        $sindicato = Sindicato::all();
        return view('vehiculo.create', compact('sindicato'), compact('personal'));
    }


    public function store(Request $request)
    {
        $vehiculo = new vehiculo();
        $vehiculo->linea = $request->input('linea');
        $vehiculo->placa = $request->input('placa');
        $vehiculo->marca = $request->input('marca');
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->id_personal = $request->input('id_personal');
        $vehiculo->id_sindicato = $request->input('id_sindicato');
        $vehiculo->save();

        return redirect()->route('vehiculo.index');
    }

    public function edit($id)
    {
        $vehiculo = vehiculo::findOrFail($id);
        return view('vehiculo.edit', compact('vehiculo'));
    }

    public function update(Request $request, $id)
    {
        $vehiculo = vehiculo::findOrFail($id);
        $vehiculo->linea = $request->input('linea');
        $vehiculo->placa = $request->input('placa');
        $vehiculo->marca = $request->input('marca');
        $vehiculo->modelo = $request->input('modelo');
        $vehiculo->descripcion = $request->input('descripcion');
        $vehiculo->id_personal = $request->input('id_personal');
        $vehiculo->id_sindicato = $request->input('id_sindicato');
        $vehiculo->save();

        return redirect()->route('vehiculo.index');
    }

    public function show($id)
    {
        $vehiculo = vehiculo::findOrfail($id);
        return view('vehiculo.show', compact('vehiculo'));
    }


    public function destroy($id)
    {
        $vehiculo = vehiculo::findOrfail($id);
        $vehiculo->delete();
        return redirect()->route('vehiculo.index');
    }
}
