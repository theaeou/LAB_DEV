<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
<<<<<<< HEAD
})->name('about');

Route::get('/content', function () {
    return view('content');
})->name('content');
=======
});

Route::get('/content', function () {
    return view('content');
});
>>>>>>> origin/master
