<?php

use Illuminate\Support\Facades\Route;

Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');
