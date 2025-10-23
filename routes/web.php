<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FamiliaController;
use App\Http\Controllers\ChatbotAdminController;
use App\Http\Controllers\ChatbotApiController;


Route::get('/', [FamiliaController::class, 'inicio'])->name('inicio');
Route::get('/parentesco', [FamiliaController::class, 'parentesco'])->name('parentesco');
Route::get('/filiacion', [FamiliaController::class, 'filiacion'])->name('filiacion');
Route::get('/adopcion', [FamiliaController::class, 'adopcion'])->name('adopcion');
Route::get('/matrimonio', [FamiliaController::class, 'matrimonio'])->name('matrimonio');
Route::get('/divorcio', [FamiliaController::class, 'divorcio'])->name('divorcio');
Route::get('/organismos', [FamiliaController::class, 'organismos'])->name('organismos');
Route::get('/api/chatbot-preguntas', [ChatbotApiController::class, 'index'])->name('api.chatbot.preguntas');



Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/chatbot', [ChatbotAdminController::class, 'index'])->name('chatbot.index');
    Route::get('/chatbot/create', [ChatbotAdminController::class, 'create'])->name('chatbot.create');
    Route::post('/chatbot', [ChatbotAdminController::class, 'store'])->name('chatbot.store');
    Route::get('/chatbot/{qa}/edit', [ChatbotAdminController::class, 'edit'])->name('chatbot.edit');
    Route::put('/chatbot/{qa}', [ChatbotAdminController::class, 'update'])->name('chatbot.update');
    Route::delete('/chatbot/{qa}', [ChatbotAdminController::class, 'destroy'])->name('chatbot.destroy');
});



require __DIR__.'/auth.php';