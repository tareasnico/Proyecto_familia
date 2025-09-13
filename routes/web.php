<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamiliaController;

Route::get('/', [FamiliaController::class, 'inicio'])->name('inicio');
Route::get('/parentesco', [FamiliaController::class, 'parentesco'])->name('parentesco');
Route::get('/filiacion', [FamiliaController::class, 'filiacion'])->name('filiacion');
Route::get('/adopcion', [FamiliaController::class, 'adopcion'])->name('adopcion');
Route::get('/matrimonio', [FamiliaController::class, 'matrimonio'])->name('matrimonio');
Route::get('/divorcio', [FamiliaController::class, 'divorcio'])->name('divorcio');
Route::get('/organismos', [FamiliaController::class, 'organismos'])->name('organismos');
// La ruta para 'bibliografia' ha sido eliminada.