<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/products/{product}', function () {
    return view('single-product');
})->name('single-product');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/categories/{category}', function () {
    return view('category');
})->name('category');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
