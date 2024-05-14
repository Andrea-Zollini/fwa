<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::as('pages')->group(function () {
    Route::get('/', function () {
        return view('pages.index');
    })->name('home');
});
