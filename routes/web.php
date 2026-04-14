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