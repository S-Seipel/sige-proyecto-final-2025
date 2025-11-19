<?php

use App\Http\Controllers\DocenteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return redirect('dashboard');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/users/docentes', [DocenteController::class, 'indexUser'])->name('docentes.index.users');
    Route::get('/users/docentes/{id}', [DocenteController::class, 'showUser'])->name('docentes.show.users');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/usuarios', [UsuarioController::class, 'index'])->name('users.index');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/subjects/{id}', [MateriaController::class, 'index'])->name('materias.manage');
    Route::post('/subjects/{id}', [MateriaController::class, 'store'])->name('materias.store');
    Route::delete('/subjects/{id}', [MateriaController::class, 'delete'])->name('materias.destroy');

    Route::get('/docentes', [DocenteController::class, 'index'])->name('docentes.index');
    Route::get('/docentes/create', [DocenteController::class, 'create'])->name('docentes.create');
    Route::get('/docentes/edit/{id}', [DocenteController::class, 'edit'])->name('docentes.edit');
    Route::patch('/docentes/edit/{id}', [DocenteController::class, 'update'])->name('docentes.update');
    Route::post('/docentes/create', [DocenteController::class, 'store'])->name('docentes.store');
    Route::get('/docentes/{id}', [DocenteController::class, 'show'])->name('docentes.show');
    Route::delete('/docentes/delete/{id}', [DocenteController::class, 'delete'])->name('docentes.delete');

    Route::get('/usuarios/edit/{id}', [UsuarioController::class, 'edit'])->name('users.edit');
    Route::patch('/usuarios/edit/{id}', [UsuarioController::class, 'update'])->name('users.update');
});

require __DIR__.'/auth.php';
