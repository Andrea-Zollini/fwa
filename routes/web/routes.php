<?php

use Illuminate\Support\Facades\Route;

Route::as('pages:')->group(function () {
    Route::view('/', 'pages.index')->name('home');
    Route::view('/login', 'livewire.auth.login')->name('login');
    Route::view('/register', 'livewire.auth.register')->name('register');
});
