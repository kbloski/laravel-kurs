<?php

use App\Http\Controllers\TodoAppController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Używanie kontrolerów
Route::get('todoapp', [TodoAppController::class, 'index'])->name('todoapp');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
 