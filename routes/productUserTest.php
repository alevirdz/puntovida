<?php
use App\Http\Controllers\ProductUserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::redirect('productUserTest', '/product-test-web-section');

    Route::get('productUserTest', [ProductUserController::class, 'create'])
    ->name('productUserTest');

    Route::post('productUserTest', [ProductUserController::class, 'store'])
    ->name('productUserTest.store');

});
