<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', function () {
    return "hi";
})->name("hi");

Route::get('/hello', function () {
    return "hello";
})->name("hello");

// Route::get('/home', function () {
//     return view("home");
// })->name("home");

// Route::get('/ciputra', function () {
//     return view("home");
// })->name("home");

Route::get('/store', function(){
    return view('store');
})->name('store');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get("/home/sum", [FirstController::class, "sum"])->name("home.sum");

Route::get("/home/sum/{param1}/{param2}", [FirstController::class, "sum2"])->name("home.sum2");

Route::get("/home/sub/{param1}/{param2?}", [FirstController::class, "sub"])->name("home.sub");

Route::get("/home", [HomeController::class, 'show'])->name("home");