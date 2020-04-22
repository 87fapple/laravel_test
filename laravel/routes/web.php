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
    return view('front.index');
})->name('home');

Route::get('about', function () {
    return view('front.about');
})->name('about');
 
Route::get('products', function () {
    return view('front.products');
})->name('products');

Route::get('store', function () {
    return view('front.store');
})->name('store');


/*
Route::view('/','welcome');
*/