<?php
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\TipoPersonalController;
use App\Http\Controllers\UserController;
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

});
