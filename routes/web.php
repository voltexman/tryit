<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');
