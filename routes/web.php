<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\NumerosContactoController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InicioController;

Route::get('/', function () {
    return redirect()->route('inicio');
});

Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');

Route::post('/contacto', [MensajeController::class, 'store'])->name('contacto.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/inicio', fn () => redirect()->route('admin.dashboard'))->name('inicio');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::resource('proyectos', ProyectoController::class)->except('show');
    Route::resource('numeros_contacto', NumerosContactoController::class)->except('show');
    Route::resource('mensajes', MensajeController::class)->only(['index', 'show', 'destroy']);
    Route::resource('usuarios', UserController::class)->except('show');
});
