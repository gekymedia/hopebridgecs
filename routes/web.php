<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/our-care', 'pages.our-care')->name('our-care');
Route::view('/demographics-served', 'pages.demographics')->name('demographics');
Route::view('/about-us', 'pages.about')->name('about');

Route::get('/contact-us', [ContactController::class, 'show'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact.store');
