<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
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
Route::group( ['middleware' => 'api'], function () {
    Route::post('login', [AuthController::class, 'login'])->name('admin.login');
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::post('refresh', [AuthController::class, 'refresh'])->name('admin.refresh');
    Route::post('me', [AuthController::class, 'me'])->name('admin.me');
});

Route::group(['prefix' => 'admin', 'middleware' => 'api'], function () {
        Route::group(['prefix' => 'products'], function () {
        Route::post('', [ProductController::class, 'index'])->name('products');
        Route::post('create', [ProductController::class, 'create'])->name('product.create');
        Route::post('destroy', [ProductController::class, 'destroy'])->name('product.destroy');
    });
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
