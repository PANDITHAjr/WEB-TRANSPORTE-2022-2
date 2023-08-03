<?php
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\TipoPersonalController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\SindicatoController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PromocionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home2', [App\Http\Controllers\Home2Controller::class, 'index'])->name('home2');


Route::middleware(['auth'])->group(function(){

    Route::group(['prefix'=>'personal'], function(){

        Route::get('/', [PersonalController::class, 'index'])->name('personal.index');
        Route::get('/create', [PersonalController::class, 'create']) -> name('personal.create');
        Route::post('/', [PersonalController::class, 'store'])->name('personal.store');
        Route::get('/{id}', [PersonalController::class, 'show'])->name('personal.show');
        Route::get('/{id}/edit', [PersonalController::class, 'edit'])->name('personal.edit');
        Route::put('/{id}', [PersonalController::class, 'update'])->name('personal.update');
        Route::get('/{id}/destroy', [PersonalController::class, 'destroy'])->name('personal.destroy');


    });



    Route::group(['prefix'=>'tipopersonal'], function(){

        Route::get('/', [TipoPersonalController::class, 'index'])->name('tipopersonal.index');
        Route::get('/create', [TipoPersonalController::class, 'create']) -> name('tipopersonal.create');
        Route::post('/', [TipoPersonalController::class, 'store'])->name('tipopersonal.store');
        Route::get('/{id}', [TipoPersonalController::class, 'show'])->name('tipopersonal.show');
        Route::get('/{id}/edit', [TipoPersonalController::class, 'edit'])->name('tipopersonal.edit');
        Route::put('/{id}', [TipoPersonalController::class, 'update'])->name('tipopersonal.update');
        Route::get('/{id}/destroy', [TipoPersonalController::class, 'destroy'])->name('tipopersonal.destroy');

    });

    Route::group(['prefix'=>'usuario'], function(){

        Route::get('/', [UserController::class, 'index'])->name('usuario.index');
        Route::get('/create', [UserController::class, 'create']) -> name('usuario.create');
        Route::post('/', [UserController::class, 'store'])->name('usuario.store');
        Route::get('/{id}', [UserController::class, 'show'])->name('usuario.show');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('usuario.edit');
        Route::put('/{id}', [UserController::class, 'update'])->name('usuario.update');
        Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('usuario.destroy');

    });


    Route::group(['prefix'=>'conductor'], function(){

        Route::get('/', [ConductorController::class, 'index'])->name('conductor.index');
        Route::get('/create', [ConductorController::class, 'create']) -> name('conductor.create');
        Route::post('/', [ConductorController::class, 'store'])->name('conductor.store');
        Route::get('/{id}', [ConductorController::class, 'show'])->name('conductor.show');
        Route::get('/{id}/edit', [ConductorController::class, 'edit'])->name('conductor.edit');
        Route::put('/{id}', [ConductorController::class, 'update'])->name('conductor.update');
        Route::get('/{id}/destroy', [ConductorController::class, 'destroy'])->name('conductor.destroy');


    });

    Route::group(['prefix'=>'vehiculo'], function(){

        Route::get('/', [VehiculoController::class, 'index'])->name('vehiculo.index');
        Route::get('/create', [VehiculoController::class, 'create']) -> name('vehiculo.create');
        Route::post('/', [VehiculoController::class, 'store'])->name('vehiculo.store');
        Route::get('/{id}', [VehiculoController::class, 'show'])->name('vehiculo.show');
        Route::get('/{id}/edit', [VehiculoController::class, 'edit'])->name('vehiculo.edit');
        Route::put('/{id}', [VehiculoController::class, 'update'])->name('vehiculo.update');
        Route::get('/{id}/destroy', [VehiculoController::class, 'destroy'])->name('vehiculo.destroy');

    });

    Route::group(['prefix'=>'sindicato'], function(){

        Route::get('/', [SindicatoController::class, 'index'])->name('sindicato.index');
        Route::get('/create', [SindicatoController::class, 'create']) -> name('sindicato.create');
        Route::post('/', [SindicatoController::class, 'store'])->name('sindicato.store');
        Route::get('/{id}', [SindicatoController::class, 'show'])->name('sindicato.show');
        Route::get('/{id}/edit', [SindicatoController::class, 'edit'])->name('sindicato.edit');
        Route::put('/{id}', [SindicatoController::class, 'update'])->name('sindicato.update');
        Route::get('/{id}/destroy', [SindicatoController::class, 'destroy'])->name('sindicato.destroy');

    });

    Route::group(['prefix'=>'promocion'], function(){

       Route::get('/', [PromocionController::class, 'index'])->name('promocion.index');
       Route::get('/create', [PromocionController::class, 'create']) -> name('promocion.create');
       Route::post('/', [PromocionController::class, 'store'])->name('promocion.store');
       Route::get('/{id}', [PromocionController::class, 'show'])->name('promocion.show');
       Route::get('/{id}/edit', [PromocionController::class, 'edit'])->name('promocion.edit');
       Route::put('/{id}', [PromocionController::class, 'update'])->name('promocion.update');
       Route::get('/{id}/destroy', [PromocionController::class, 'destroy'])->name('promocion.destroy');

    });

    Route::group(['prefix'=>'ruta'], function(){

        Route::get('/', [RutaController::class, 'index'])->name('ruta.index');
        Route::get('/create', [RutaController::class, 'create']) -> name('ruta.create');
        Route::post('/', [RutaController::class, 'store'])->name('ruta.store');
        Route::get('/{id}', [RutaController::class, 'show'])->name('ruta.show');
        Route::get('/{id}/edit', [RutaController::class, 'edit'])->name('ruta.edit');
        Route::put('/{id}', [RutaController::class, 'update'])->name('ruta.update');
        Route::get('/{id}/destroy', [RutaController::class, 'destroy'])->name('ruta.destroy');

    });

    Route::group(['prefix'=>'mantenimiento'], function(){

        Route::get('/', [MantenimientoController::class, 'index'])->name('mantenimiento.index');
        Route::get('/create', [MantenimientoController::class, 'create']) -> name('mantenimiento.create');
        Route::post('/', [MantenimientoController::class, 'store'])->name('mantenimiento.store');
        Route::get('/{id}', [MantenimientoController::class, 'show'])->name('mantenimiento.show');
        Route::get('/{id}/edit', [MantenimientoController::class, 'edit'])->name('mantenimiento.edit');
        Route::put('/{id}', [MantenimientoController::class, 'update'])->name('mantenimiento.update');
        Route::get('/{id}/destroy', [MantenimientoController::class, 'destroy'])->name('mantenimiento.destroy');

    });

});
