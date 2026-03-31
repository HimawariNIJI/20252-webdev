<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // dd("Hello world");
    return view('welcome');
});
