<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\User;
use App\Models\users;
use Database\Seeders\UserSeeder;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
{
    $buscar = $request->input('buscar');
    $refrescar = $request->input('refrescar');

    $usuarios = User::query();

    if ($buscar) {
        $usuarios->where('name', 'like', "%$buscar%")
                 ->orWhere('email', 'like', "%$buscar%");
    }

    if ($refrescar) {
        // Si se solicita refrescar, obtenemos todos los registros sin paginación.
        $usuarios = $usuarios->get();
    } else {
        // Aplicamos la paginación con un límite de 10 registros por página.
        $usuarios = $usuarios->paginate(10);
    }

    return view('usuario.index', compact('usuarios'));
}

    public function create()
    {
        $personales = Personal::all();
        return view('usuario.create',compact('personales'));
    }
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->id_personal = $request-> input('id_personal');
        $usuario->save();

        return redirect()->route('usuario.index');

    }
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuario.show', compact('usuario'));
    }
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        $personales = Personal::all();
        return view('usuario.edit', compact('usuario','personales'));

    }
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->name = $request -> input('name');
        $usuario->email  = $request -> input('email');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->id_personal = $request->input('id_personal');
        $usuario->save();

        return redirect()->route('usuario.index');
    }
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuario.index');
    }
}
