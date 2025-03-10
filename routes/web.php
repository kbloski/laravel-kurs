<?php

use App\Http\Controllers\TodoAppController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Używanie kontrolerów
Route::get('/todoapp', [TodoAppController::class, 'index'])->name('todoapp');
Route::post('/todoapp', [TodoAppController::class, 'store'])->name('store');
Route::put('/todoapp/{task}', [TodoAppController::class, 'update'])->name('todoapp.update');
Route::delete('/todoapp/{task}', [TodoAppController::class, 'destroy'])->name('destroy');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
 