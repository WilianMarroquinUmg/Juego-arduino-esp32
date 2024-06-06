<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {


    require __DIR__ . '/rutas_configuraciones/rutas_perfil.php';

    Route::get('iniciar', [App\Http\Controllers\ManejarJugadorActualController::class, 'index'])->name('iniciar.juego');

    Route::get('terminar', [App\Http\Controllers\ManejarJugadorActualController::class, 'terminarJuego'])->name('terminar.juego');

    Route::get('iniciar/juego', [App\Http\Controllers\ManejarJugadorActualController::class, 'IniciarJuegoAplicacion'])->name('iniciar.juego.aplicacion');

    Route::get('terminar/juego', [App\Http\Controllers\ManejarJugadorActualController::class, 'terminarJuegoAplicacion'])->name('terminar.juego.aplicacion');

    Route::get('ver/mejor/puntuacion', [App\Http\Controllers\ManejarJugadorActualController::class, 'terminarJuegoAplicacion'])->name('mejorPuntuacion');


});

require __DIR__ . '/auth.php';

