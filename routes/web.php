<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::view('/home', 'pages.index');

Route::view('/about', 'pages.about');

Route::view('/contact', 'pages.contact');

Route::prefix('services')->group(function () {
    Route::view('/', 'pages.services');
    Route::view('/bmi-calculator', 'pages.bmi-calculator');
    Route::view('/exercises', 'pages.exercises');
});

Route::view('/pricing', 'pages.pricing');

Route::view('/trainers', 'pages.trainers');

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
