<?php
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductUserController;


Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

//Renderizando productUserTest
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('product-test-web-section', function () {
        return Inertia::render('productUserTest');
    })->name('productUserTest');

    Route::post('product-test-web-section', [ProductUserController::class, 'store'])
        ->name('productUserTest.store');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
