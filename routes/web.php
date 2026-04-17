<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'showHome'])->name('index');

Route::get('/about', [PageController::class, 'showAbout'])->name('about');

Route::get('/services', [PageController::class, 'showServices'])->name('services');

Route::get('/contact', [PageController::class, 'showContact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');
Route::get('/contact-result', [PageController::class, 'showResult'])->name('contact.result');

Route::get('/store', [StoreController::class, 'show'])->name('store');

Route::get('/product/insert-form', [StoreController::class, 'product_insert_form'])->name('product_insert_form');

Route::post('/product/insert', [StoreController::class, 'insert_product'])->name('insert_product');

Route::get('/product/edit/{product:id}', [StoreController::class, 'product_edit_form'])->name('product_edit_form');

Route::put('/product/update/{product:id}', [StoreController::class, 'update_product'])->name('update_product');

Route::delete('/product/delete/{product:id}', [StoreController::class, 'delete_product'])->name('delete_product');