<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller; // Asegúrate de que esta línea de importación esté presente

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // ... otros métodos ...

    protected function redirectTo()
    {
        if (auth()->check()) {
            $user = auth()->user();

            if ($user->state == 'bloqueado') {
                return route('user_locked');
            } elseif ($user->personal && $user->personal->tipo_personal->descripcion == 'Cliente') {
                return route('home2');
            }
        }

        return route('home');
    }


    public function showLockedMessage()
    {
        return view('auth.user_locked');
    }
}

