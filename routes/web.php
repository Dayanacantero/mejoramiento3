<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/equipment', [EquipmentController::class, 'index'])->name('equipment.index');

// Ruta para mostrar el formulario de creación de jugadores
// Rutas para mostrar la lista y el formulario de creación de jugadores
Route::get('/jugadores', [EquipmentController::class, 'index'])->name('players.index');
Route::get('/jugadores/create', [EquipmentController::class, 'create'])->name('players.create');
Route::post('/jugadores', [EquipmentController::class, 'store'])->name('players.store');

// Rutas para mostrar el formulario de edición y actualizar y eliminar jugadores
Route::get('/jugadores/{jugador}/edit', [PlayerController::class, 'edit'])->name('players.edit');
Route::put('/jugadores/{jugador}', [PlayerController::class, 'update'])->name('players.update');
Route::delete('/jugadores/{jugador}', [PlayerController::class, 'destroy'])->name('players.destroy');
