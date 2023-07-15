<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function ($user) {
             return $user->personal->tipo_personal->descripcion == 'Administrador';
        });

        Gate::define('secre', function ($user) {
            return $user->personal->tipo_personal->descripcion == 'Secretaria';
        });

    }
}
