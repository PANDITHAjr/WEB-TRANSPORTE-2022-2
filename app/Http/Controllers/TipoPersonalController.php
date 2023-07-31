<?php

namespace App\Http\Controllers;

use App\Models\TipoPersonal;
use Illuminate\Http\Request;

class TipoPersonalController extends Controller
{

    public function index(Request $request)
    {
        // $tipopersonales = TipoPersonal::all();
        // return view('tipopersonal.index', compact('tipopersonales'));

        $buscar = $request->input('buscar');
        $refrescar = $request->input('refrescar');

        $tipopersonales = TipoPersonal::query();
        if($buscar){
            $tipopersonales->where('descripcion', 'like', "%$buscar%");
        }
        $tipopersonales = $tipopersonales->get();

        if($refrescar){
            $tipopersonales = TipoPersonal::all();
        }

        $tipopersonales = TipoPersonal::paginate(10);
        return view('tipopersonal.index', compact('tipopersonales'));
    }

    public function create()
    {
        return view('tipopersonal.create');
    }

    public function store(Request $request)
    {
        $tipopersonal = new TipoPersonal();
        $tipopersonal->descripcion = $request->input('descripcion');
        $tipopersonal->save();

        return redirect()->route('tipopersonal.index');
    }

    public function show($id)
    {
        $tipopersonal = TipoPersonal::findOrFail($id);
        return view('tipopersonal.show', compact('tipopersonal'));
    }

    public function edit($id)
    {
        $tipopersonal = TipoPersonal::findOrFail($id);
        return view('tipopersonal.edit', compact('tipopersonal'));
    }

    public function update(Request $request, $id)
    {
        $tipopersonal = TipoPersonal::findOrFail($id);
        $tipopersonal->descripcion = $request->input('descripcion');
        $tipopersonal->save();

        return redirect()->route('tipopersonal.index');
    }
    public function destroy($id)
    {
        $tipopersonal = TipoPersonal::findOrFail($id);
        $tipopersonal->delete();

        return redirect()->route('tipopersonal.index');
    }
}
