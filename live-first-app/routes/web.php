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
    $message = "Hello Laravel 10";
    $name = 'Pietro';
    return view('welcome', compact('message', 'name'));
});

Route::get('/console.php', function () {
    $message = "Hello Laravel 10";
    $name = 'Pietro';
    return view(console(
        $data = [
            'title' => 'Titolo',
            'text' => 'lorem impsum',
        ]
    ));
});