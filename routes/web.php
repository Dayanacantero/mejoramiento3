<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('equipment/listar',[EquipmentController::class,'index'])->name('equipment.index');
Route::get('equipment/create',[EquipmentController::class,'create']);
Route::post('equipment/store', [EquipmentController::class,'store'])->name('equipment.store');
Route::get('equipment/{equipment}',[EquipmentController::class,'show'])->name('equipment.show');
Route::put('equipment/{equipment}',[EquipmentController::class,'update'])->name('equipment.update');
Route::delete('equipment/{destroy}',[EquipmentController::class,'destroy'])->name('equipment.destroy');
Route::get('equipment/{equipment}/editar',[EquipmentController::class,'edit'])->name('equipment.edit');

Route::get('player/listar',[PlayerController::class,'index'])->name('player.index');
Route::get('player/create',[PlayerController::class,'create']);
Route::post('player/store', [PlayerController::class,'store'])->name('players.store');
Route::get('player/{show}',[PlayerController::class,'show'])->name('player.show');
Route::put('player/{player}',[PlayerController::class,'update'])->name('player.update');
Route::delete('player/{destroy}',[PlayerController::class,'destroy'])->name('player.destroy');
Route::get('player/{player}/editar',[PlayerController::class,'edit'])->name('player.edit');
