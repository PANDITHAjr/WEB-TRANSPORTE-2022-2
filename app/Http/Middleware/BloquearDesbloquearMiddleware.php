<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BloquearDesbloquearMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está bloqueado o desbloqueado
        if ($usuarioBloqueado) {
            return redirect()->route('pagina.bloqueo');
        }

        return $next($request);
    }
}
