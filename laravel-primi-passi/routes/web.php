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
    $title = 'Hello World';
    return view('home', compact('title'));
});

Route::get('/my_page', function () {
    $title = 'Welcome to My Page';
    return view('my_page', compact('title'));
});