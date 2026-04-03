<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'showHome'])->name('index');

Route::get('/about', [PageController::class, 'showAbout'])->name('about');

Route::get('/services', [PageController::class, 'showServices'])->name('services');

Route::get('/contact', [PageController::class, 'showContact'])->name('contact');