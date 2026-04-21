<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StoreController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'showHome'])->name('index');

Route::get('/about', [PageController::class, 'showAbout'])->name('about');

Route::get('/services', [PageController::class, 'showServices'])->name('services');

Route::get('/contact', [PageController::class, 'showContact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::get('/contact-result', [PageController::class, 'showResult'])->name('contact.result');

// Route::get('/store', [StoreController::class, 'show'])->name('store');

// Route::get('/product/insert-form', [StoreController::class, 'product_insert_form'])->name('product_insert_form');

// Route::post('/product/insert', [StoreController::class, 'insert_product'])->name('insert_product');

// Route::get('/product/edit/{product:id}', [StoreController::class, 'product_edit_form'])->name('product_edit_form');

// Route::put('/product/update/{product:id}', [StoreController::class, 'update_product'])->name('update_product');

// Route::delete('/product/delete/{product:id}', [StoreController::class, 'delete_product'])->name('delete_product');

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('test');

Route::get('/login', [AuthController::class, 'show_login'])->name('login.show');

Route:: post('/login_auth', [AuthController::class, 'login_auth'])->name('login.auth');

Route::get('/login', [AuthController::class, 'show_login'])->name('login.show')->middleware('guest');

// Route::middleware('auth')->group (function(){
//     Route::get('/store', [StoreController::class, 'show'])->name('store');
//     Route::get('/product/insert-form', [StoreController::class, 'product_insert_form'])->name('product_insert_form');
//     Route::post('/product/insert', [StoreController::class, 'insert_product'])->name('insert_product');
//     Route::get('/product/edit/{product:id}', [StoreController::class, 'product_edit_form'])->name('product_edit_form');
//     Route::put('/product/update/{product:id}', [StoreController::class, 'update_product'])->name('update_product');
//     Route::delete('/product/delete/{product:id}', [StoreController::class, 'delete_product'])->name('delete_product');
// });

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/about2', function(){
    return view('about2');
})->name('about2');

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
    });
});