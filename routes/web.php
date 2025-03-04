<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('sayhello', function () {
    return Inertia::render('SayHello');
})->name('sayhello');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
