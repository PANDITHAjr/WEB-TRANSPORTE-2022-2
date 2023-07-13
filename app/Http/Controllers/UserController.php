<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\User;
use Database\Seeders\UserSeeder;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuario.index',compact('usuarios'));
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
