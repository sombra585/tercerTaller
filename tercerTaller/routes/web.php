<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonajeController;


// Inicio
Route::get('/', [PageController::class, 'inicio'])->name('inicio');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');


Route::get('/registro', [AuthController::class, 'showRegister'])->name('registro');
Route::post('/registro', [AuthController::class, 'register'])->name('registro.post');

// Personajes
// Personajes (solo para usuarios logueados)
// Personajes (solo para usuarios logueados)
Route::middleware('auth')->group(function () {
    Route::get('/mis-personajes', [PersonajeController::class, 'index'])->name('mis.personajes');
    Route::get('/nuevo-personaje', [PersonajeController::class, 'create'])->name('nuevo.personaje');

    // NUEVA RUTA POST para guardar personajes
    Route::post('/nuevo-personaje', [PersonajeController::class, 'store'])->name('guardar.personaje');

    Route::get('/mostrar-registros', [PersonajeController::class, 'registros'])->name('mostrar.registros');
});
Route::post('/logout', function() {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');