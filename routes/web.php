<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

//Renderizando mi primera vista
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('product-test-web-section', function () {
        return Inertia::render('productUserTest');
    })->name('productUserTest');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
