<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WishlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [RegisterController::class, 'login']);
Route::get('/send-verification-code/{email}', [MailController::class, 'verificationCode']);
Route::post('/validation-verification-code', [MailController::class, 'validationCode']);


Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/category', [ProductCategoryController::class, 'index']);
    Route::get('/type', [ProductTypeController::class, 'index']);
    Route::get('/{id}', [ProductController::class, 'detail']);

});

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('strict')->group(function () {
        Route::get('/check', [RegisterController::class, 'check']);
        
        Route::prefix('cart')->group(function () {
            Route::get('/', [CartController::class, 'index']);
            Route::post('/{product_id}', [CartController::class, 'create']);
        });

        Route::prefix('wishlist')->group(function () {
            Route::get('/', [WishlistController::class, 'index']);
            Route::post('/{product_id}', [WishlistController::class, 'create']);
        });
    });
    
});
