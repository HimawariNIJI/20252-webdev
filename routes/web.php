<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'show'])->name('home');
Route::get('/about', [AboutController::class, 'showAbout'])->name('about');

Route::get('/login', [AuthController::class, 'show_login'])->name('login.show');

Route:: post('/login_auth', [AuthController::class, 'login_auth'])->name('login.auth');

Route::get('/login', [AuthController::class, 'show_login'])->name('login.show')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
    Route::middleware(['role:admin,owner'])->group(function() {
        Route::get('/product/insert-form', [StoreController::class, 'product_insert_form'])->name('product_insert_form');
        Route::post('/product/insert', [StoreController::class, 'insert_product'])->name('insert_product');
        Route::get('/product/edit/{product:id}', [StoreController::class, 'product_edit_form'])->name('product_edit_form');
        Route::put('/product/update/{product:id}', [StoreController::class, 'update_product'])->name('update_product');
        Route::delete('/product/delete/{product:id}', [StoreController::class, 'delete_product'])->name('delete_product');
    });

    Route::middleware(['role:customer,admin,owner'])->group(function(){
        Route::get('/store', [StoreController::class, 'show'])->name('store');
        Route::get('/orders', [OrderController::class, 'index'])->name('orders');
        Route::get('/order/{order_id}', [OrderController::class, 'order_details'])->name('order_details');
    });

    Route::middleware(['role:customer'])->group(function(){
        Route::post('/add-to-cart/{product_id}', [StoreController::class, 'add_to_cart'])->name('add_to_cart');
        Route::get('/view-cart', [StoreController::class, 'view_cart'])->name('view_cart');
        Route::patch('/update-cart/{product_id}', [StoreController::class, 'update_cart'])->name('update_cart');
        Route::delete('/remove-from-cart/{product_id}', [StoreController::class, 'remove_from_cart'])->name('remove_from_cart');
        Route::post('/checkout', [StoreController::class, 'checkout'])->name('checkout');
        Route::get('/payment/return/{order_id}', [StoreController::class, 'payment_return'])->name('payment_return');
        Route::get('/payment/status/{order_id}', [StoreController::class, 'payment_status'])->name('payment_status');
    });
});