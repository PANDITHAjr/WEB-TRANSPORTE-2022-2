<?php
use App\Http\Controllers\SalidaController;
use App\Http\Controllers\VentaBoletoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ConductorController;


use App\Http\Controllers\ClienteController;

use App\Http\Controllers\PersonalController;
use App\Http\Controllers\TipoPersonalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetalleSalida;
use App\Http\Controllers\DetalleSalidaController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

    Route::group(['prefix'=>'tipo_personal'], function(){

        Route::get('/', [TipoPersonalController::class, 'index'])->name('tipo_personal.index');
        Route::get('/create', [TipoPersonalController::class, 'create']) -> name('tipo_personal.create');
        Route::post('/', [TipoPersonalController::class, 'store'])->name('tipo_personal.store');
        Route::get('/{id}', [TipoPersonalController::class, 'show'])->name('tipo_personal.show');
        Route::get('/{id}/edit', [TipoPersonalController::class, 'edit'])->name('tipo_personal.edit');
        Route::put('/{id}', [TipoPersonalController::class, 'update'])->name('tipo_personal.update');
        Route::get('/{id}/destroy', [TipoPersonalController::class, 'destroy'])->name('tipo_personal.destroy');

    });



    //
    //Route::group(['prefix'=>'tipo_personal'], function(){
    //
    //    Route::get('/', [TipoPersonalController::class, 'index'])->name('tipopersonal.index');
    //    Route::get('/create', [TipoPersonalController::class, 'create']) -> name('tipopersonal.create');
    //    Route::post('/', [TipoPersonalController::class, 'store'])->name('tipopersonal.store');
    //    Route::get('/{id}', [TipoPersonalController::class, 'show'])->name('tipopersonal.show');
    //    Route::get('/{id}/edit', [TipoPersonalController::class, 'edit'])->name('tipopersonal.edit');
    //    Route::put('/{id}', [TipoPersonalController::class, 'update'])->name('tipopersonal.update');
    //    Route::get('/{id}/destroy', [TipoPersonalController::class, 'destroy'])->name('tipopersonal.destroy');
    //
    //});
    //
    //
    //Route::group(['prefix'=>'user'], function(){
    //
    //    Route::get('/', [UserController::class, 'index'])->name('user.index');
    //    Route::get('/create', [UserController::class, 'create']) -> name('user.create');
    //    Route::post('/', [UserController::class, 'store'])->name('user.store');
    //    Route::get('/{id}', [UserController::class, 'show'])->name('user.show');
    //    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
    //    Route::put('/{id}', [UserController::class, 'update'])->name('user.update');
    //    Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('user.destroy');
    //
    //});




    Route::group(['prefix'=>'usuario'], function(){

        Route::get('/', [UserController::class, 'index'])->name('usuario.index');
        Route::get('/create', [UserController::class, 'create']) -> name('usuario.create');
        Route::post('/', [UserController::class, 'store'])->name('usuario.store');
        Route::get('/{id}', [UserController::class, 'show'])->name('usuario.show');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('usuario.edit');
        Route::put('/{id}', [UserController::class, 'update'])->name('usuario.update');
        Route::get('/{id}/destroy', [UserController::class, 'destroy'])->name('usuario.destroy');

    });

    //
    //
    //
    //
    /////////////MODIFICAR VENTA BOLETO
    //Route::group(['prefix'=>'producto'], function(){
    //
    //    Route::get('/', [ProductoController::class, 'index'])->name('producto.index');
    //    Route::get('/create', [ProductoController::class, 'create']) -> name('producto.create');
    //    Route::post('/', [ProductoController::class, 'store'])->name('producto.store');
    //    Route::get('/{id}', [ProductoController::class, 'show'])->name('producto.show');
    //    Route::get('/{id}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
    //    Route::put('/{id}', [ProductoController::class, 'update'])->name('producto.update');
    //    Route::get('/{id}/destroy', [ProductoController::class, 'destroy'])->name('producto.destroy');
    //
    //});
    //
    /////////MODIFICAR CLIENTE
    //Route::group(['prefix'=>'cliente'], function(){
    //
    //    Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');
    //    Route::get('/create', [ClienteController::class, 'create']) -> name('cliente.create');
    //    Route::post('/', [ClienteController::class, 'store'])->name('cliente.store');
    //   // Route::get('/{id}', [ClienteController::class, 'show'])->name('cliente.show');
    //   // Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
    //   // Route::put('/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    //   // Route::get('/{id}/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');
    //
    //});
    //
    ///////////MODIFICAR CLIENTE
    Route::group(['prefix'=>'cliente'], function(){
    //
        Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');
        Route::get('/create', [ClienteController::class, 'create']) -> name('cliente.create');
        Route::post('/', [ClienteController::class, 'store'])->name('cliente.store');
        Route::get('/{id}', [ClienteController::class, 'show'])->name('cliente.show');
        Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
        Route::put('/{id}', [ClienteController::class, 'update'])->name('cliente.update');
        Route::get('/{id}/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');
    //
    });
    //
    ///>>>>>>> ramita_de_santiago
    //
    //
    //
    /////////MODIFICAR SALIDA
    //Route::group(['prefix'=>'cliente'], function(){
    //
    //    Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');
    //    Route::get('/create', [ClienteController::class, 'create']) -> name('cliente.create');
    //    Route::post('/', [ClienteController::class, 'store'])->name('cliente.store');
    //    Route::get('/{id}', [ClienteController::class, 'show'])->name('cliente.show');
    //    Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
    //    Route::put('/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    //    Route::get('/{id}/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');
    //
    //});
    //
    /////// MODIFICAR CONDUCTOR
    //Route::group(['prefix'=>'cliente'], function(){
    //
    //    Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');
    //    Route::get('/create', [ClienteController::class, 'create']) -> name('cliente.create');
    //    Route::post('/', [ClienteController::class, 'store'])->name('cliente.store');
    //    Route::get('/{id}', [ClienteController::class, 'show'])->name('cliente.show');
    //    Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
    //    Route::put('/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    //    Route::get('/{id}/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');
    //
    //});
    //
    ////////////MODIFICAR DETALLE_SALIDA
    //Route::group(['prefix'=>'cliente'], function(){
    //
    //    Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');
    //    Route::get('/create', [ClienteController::class, 'create']) -> name('cliente.create');
    //    Route::post('/', [ClienteController::class, 'store'])->name('cliente.store');
    //    Route::get('/{id}', [ClienteController::class, 'show'])->name('cliente.show');
    //    Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
    //    Route::put('/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    //    Route::get('/{id}/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy');

    Route::group(['prefix'=>'conductor'], function(){

        Route::get('/', [ConductorController::class, 'index'])->name('conductor.index');
        Route::get('/create', [ConductorController::class, 'create']) -> name('conductor.create');
        Route::post('/', [ConductorController::class, 'store'])->name('conductor.store');
        Route::get('/{id}', [ConductorController::class, 'show'])->name('conductor.show');
        Route::get('/{id}/edit', [ConductorController::class, 'edit'])->name('conductor.edit');
        Route::put('/{id}', [ConductorController::class, 'update'])->name('conductor.update');
        Route::get('/{id}/destroy', [ConductorController::class, 'destroy'])->name('conductor.destroy');


    });

    Route::group(['prefix'=>'salida'], function(){

        Route::get('/', [SalidaController::class, 'index'])->name('salida.index');
        Route::get('/create', [SalidaController::class, 'create']) -> name('salida.create');
        Route::post('/', [SalidaController::class, 'store'])->name('salida.store');
        Route::get('/{id}', [SalidaController::class, 'show'])->name('salida.show');
        Route::get('/{id}/edit', [SalidaController::class, 'edit'])->name('salida.edit');
        Route::put('/{id}', [SalidaController::class, 'update'])->name('salida.update');
        Route::get('/{id}/destroy', [SalidaController::class, 'destroy'])->name('salida.destroy');

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

    Route::group(['prefix'=>'ventaboleto'], function(){

        Route::get('/', [VentaBoletoController::class, 'index'])->name('ventaboleto.index');
        Route::get('/create', [VentaBoletoController::class, 'create']) -> name('ventaboleto.create');
        Route::post('/', [VentaBoletoController::class, 'store'])->name('ventaboleto.store');
        Route::get('/{id}', [VentaBoletoController::class, 'show'])->name('ventaboleto.show');
        Route::get('/{id}/edit', [VentaBoletoController::class, 'edit'])->name('ventaboleto.edit');
        Route::put('/{id}', [VentaBoletoController::class, 'update'])->name('ventaboleto.update');
        Route::get('/{id}/destroy', [VentaBoletoController::class, 'destroy'])->name('ventaboleto.destroy');

    });


    Route::group(['prefix'=>'detalle_salida'], function(){

        Route::get('/', [DetalleSalidaController::class, 'index'])->name('detalle_salida.index');
        Route::get('/create', [DetalleSalidaController::class, 'create']) -> name('detalle_salida.create');
        Route::post('/', [DetalleSalidaController::class, 'store'])->name('detalle_salida.store');
        Route::get('/{id}', [DetalleSalidaController::class, 'show'])->name('detalle_salida.show');
        // Route::get('/{id}/edit', [DetalleSalidaController::class, 'edit'])->name('detalle_salida.edit');
        // Route::put('/{id}', [DetalleSalidaController::class, 'update'])->name('detalle_salida.update');
        Route::get('/{id}/destroy', [DetalleSalidaController::class, 'destroy'])->name('detalle_salida.destroy');

    });

});
