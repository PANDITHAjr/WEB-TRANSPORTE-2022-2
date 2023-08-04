<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // Verificar si el usuario está bloqueado
            if (Auth::check() && Auth::user()->state === 'bloqueado') {
                return route('login')->withErrors(['bloqueado' => 'Tu cuenta ha sido bloqueada.']);
            }
            return route('login');
        }
    }
}
