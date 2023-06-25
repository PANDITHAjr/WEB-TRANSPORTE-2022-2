<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.index',compact('clientes'));
    }

    public function create()
    {
        return view('cliente.create');
    }
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->ci_cliente = $request->input('ci_cliente');
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->telefono =$request->input('telefono');
        $cliente->save(); 

        return redirect()->route('cliente.index');
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.show', compact('cliente'));
    }

    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->ci_cliente = $request->input('ci_cliente');
        $cliente->nombre = $request->input('nombre');
        $cliente->apellido = $request->input('apellido');
        $cliente->telefono =$request->input('telefono');
        $cliente->save();

        return redirect()->route('cliente.index');
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return  redirect()->route('cliente.index');
    }
}
