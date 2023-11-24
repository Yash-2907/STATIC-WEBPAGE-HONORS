<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/awards', function () {
    return view('awards');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/books', function () {
    return view('books');
});

Route::get('/awards', function () {
    return view('awards');
});