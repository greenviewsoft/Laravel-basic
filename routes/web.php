<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', [ContactController::class, 'index']);