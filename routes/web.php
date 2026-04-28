<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/our-care', 'home');
Route::view('/demographics-served', 'home');
Route::view('/about-us', 'home');
Route::view('/contact-us', 'home');
