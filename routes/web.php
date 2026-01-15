<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-article', function () {
    return view('blog-article');
});