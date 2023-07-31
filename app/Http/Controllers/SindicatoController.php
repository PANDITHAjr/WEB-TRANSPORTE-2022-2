<?php

namespace App\Http\Controllers;

use App\Models\Sindicato;
use Illuminate\Http\Request;

class SindicatoController extends Controller
{
    public function index(Request $request)
    {
        // $sindicatos = Sindicato::all();
        // return view('sindicato.index', compact('sindicatos'));

        $buscar = $request->input('buscar');
        $refrescar = $request->input('refrescar');

        $sindicatos = Sindicato::query();
        if($buscar){
            $sindicatos->where('nombre', 'like', "%$buscar%");
        }
        $sindicatos = $sindicatos->get();

        if($refrescar){
            $sindicatos = Sindicato::all();
        }

        $sindicatos = Sindicato::paginate(10);
        return view('sindicato.index', compact('sindicatos'));
    }

    public function create()
    {
        return view('sindicato.create');
    }

    public function store(Request $request)
    {
        $sindicato = new Sindicato();
        $sindicato->nombre = $request->input('nombre');
        $sindicato->save();

        return redirect()->route('sindicato.index');
    }

    public function show($id)
    {
        $sindicato = Sindicato::findOrFail($id);
        return view('sindicato.show', compact('sindicato'));
    }

    public function edit($id)
    {
        $sindicato = Sindicato::findOrFail($id);
        return view('sindicato.edit', compact('sindicato'));
    }

    public function update(Request $request, $id)
    {
        $sindicato = Sindicato::findOrFail($id);
        $sindicato->nombre = $request->input('nombre');
        $sindicato->save();

        return redirect()->route('sindicato.index');
    }
    public function destroy($id)
    {
        $sindicato = Sindicato::findOrFail($id);
        $sindicato->delete();

        return redirect()->route('sindicato.index');
    }
}
