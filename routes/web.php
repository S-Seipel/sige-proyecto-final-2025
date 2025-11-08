<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('dashboard'))->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('docentes', DocenteController::class);
    Route::get('docentes/{docente}/materias', [DocenteMateriaController::class, 'index'])->name('docentes.materias');
    Route::post('docentes/{docente}/materias', [DocenteMateriaController::class, 'store'])->name('docentes.materias.store');
    Route::delete('docentes/{docente}/materias/{materia}', [DocenteMateriaController::class, 'destroy'])->name('docentes.materias.destroy');

    Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index')->middleware('can:manage-users');
    Route::get('/usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit')->middleware('can:manage-users');
    Route::put('/usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update')->middleware('can:manage-users');

    Route::get('/readme', fn() => view('readme'))->name('readme');
    Route::get('/manual', fn() => view('manual'))->name('manual');
});
