<?php

use App\Http\Controllers\DocenteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    redirect('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

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

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
