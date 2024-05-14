<?php

use Illuminate\Support\Facades\Route;

Route::as('pages:')->group(function () {
    Route::view('/', 'pages.index')->name('home');
});
