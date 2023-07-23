<?php

namespace App\Http\Controllers;

use App\Models\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    public function index()
    {
        $promocions = Promocion::all();

        return view('promocion.index', compact('promociones'));
    }

    public function create()
    {
        return view('promocion.create');
    }

    public function store(Request $request)
    {
        $promocion = new Promocion();
        $promocion->nombre = $request->input('nombre');
        $promocion->descripcion = $request->input('descripcion');
        $promocion->save();

        return redirect()->route('promocion.index');
    }

    public function show($id)
    {
        $promocion = Promocion::findOrFail($id);
        return view('promocion.show', compact('promocion'));
    }

    public function edit($id)
    {
        $promocion = Promocion::findOrFail($id);
        return view('promocion.edit', compact('promocion'));
    }

    public function update(Request $request, $id)
    {
        $promocion = Promocion::findOrFail($id);
        $promocion->nombre = $request->input('nombre');
        $promocion->descripcion = $request->input('descripcion');
        $promocion->save();

        return redirect()->route('promocion.index');
    }
    public function destroy($id)
    {
        $promocion = Promocion::findOrFail($id);
        $promocion->delete();

        return redirect()->route('promocion.index');
    }
}
