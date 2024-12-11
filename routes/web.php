<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('index');
});
Route::get('/index', [homeController::class, 'index'])->name('index');