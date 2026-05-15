<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/blog', 'pages::blog.list')->name('blog.list');
Route::livewire('/blog/{post:slug}', 'pages::blog.show')->name('blog.show');

Route::livewire('/gallery', 'pages::gallery')->name('gallery');
