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
    return view('welcome');
});

Route::get('about', function() {
    return "<h1>About Page</h1>";
});

Route::get('contact', function() {
    return "<h1>Contact Page</h1>";
})->name('contact');

Route::get('contact/{id}', function($id) {
    return $id;
});

Route::get('home', function() {
    return "<a href='".route('contact')."'>Contact</a>";
});
