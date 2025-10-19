<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamiliaController;
use App\Http\Controllers\ChatbotAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- 1. Rutas Públicas (Las que todos ven) ---
// Esta es la línea más importante que arregla tu problema:
// Le dice a Laravel que la página principal (/) la maneja tu controlador.
Route::get('/', [FamiliaController::class, 'inicio'])->name('inicio');
Route::get('/parentesco', [FamiliaController::class, 'parentesco'])->name('parentesco');
Route::get('/filiacion', [FamiliaController::class, 'filiacion'])->name('filiacion');
Route::get('/adopcion', [FamiliaController::class, 'adopcion'])->name('adopcion');
Route::get('/matrimonio', [FamiliaController::class, 'matrimonio'])->name('matrimonio');
Route::get('/divorcio', [FamiliaController::class, 'divorcio'])->name('divorcio');
Route::get('/organismos', [FamiliaController::class, 'organismos'])->name('organismos');


// --- 2. Rutas de Administración (Protegidas por Login) ---
// Estas son las rutas para tu panel de "Control".
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/chatbot', [ChatbotAdminController::class, 'index'])->name('chatbot.index');
    Route::get('/chatbot/create', [ChatbotAdminController::class, 'create'])->name('chatbot.create');
    Route::post('/chatbot', [ChatbotAdminController::class, 'store'])->name('chatbot.store');
    Route::get('/chatbot/{qa}/edit', [ChatbotAdminController::class, 'edit'])->name('chatbot.edit');
    Route::put('/chatbot/{qa}', [ChatbotAdminController::class, 'update'])->name('chatbot.update');
    Route::delete('/chatbot/{qa}', [ChatbotAdminController::class, 'destroy'])->name('chatbot.destroy');
});


// --- 3. Rutas de Autenticación (Login, Registro, etc.) ---
// Esta línea la añade Breeze y es necesaria para que el login funcione.
require __DIR__.'/auth.php';