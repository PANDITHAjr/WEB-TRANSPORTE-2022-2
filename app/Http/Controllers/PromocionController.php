<?php

namespace App\Http\Controllers;

use App\Models\Promocion;
use Illuminate\Http\Request;

class PromocionController extends Controller
{
    public function index(Request $request)
    {
        $buscar = $request->input('buscar');
        $refrescar = $request->input('refrescar');

        $promociones = Promocion::query();

        if ($buscar) {
            $promociones->where('nombre', 'like', "%$buscar%")
                ->orWhere('descripcion', 'like', "%$buscar%");
        }

        if ($refrescar) {
            // Si se solicita refrescar, obtenemos todos los registros sin paginación.
            $promociones = $promociones->get();
        } else {
            // Aplicamos la paginación con un límite de 10 registros por página.
            $promociones = $promociones->paginate(10);
        }

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
