<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([], function () {
    Route::post('login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('products', [ProductController::class, 'index'])->name('products');
});

Route::group( ['middleware' => 'auth.jwt'], function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::post('me', [AuthController::class, 'me'])->name('admin.me');

    Route::group(['prefix' => 'admin'], function () {
        Route::group(['prefix' => 'products'], function () {
            Route::post('create', [ProductController::class, 'create'])->name('product.create');
            Route::post('destroy', [ProductController::class, 'destroy'])->name('product.destroy');
        });
    });
});

Route::group(['prefix' => 'menu'], function () {
    Route::post('', [MenuController::class, 'index'])->name('menu');
    Route::post('create', [MenuController::class, 'createMenu'])->name('menu.create');
});
