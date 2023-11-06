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
    return view('jewellery');
});
Route::get('/', function () {
    return view('electronic');
});
Route::get('/', function () {
    return view('fashion');
});
Route::get('/', function () {
    return view('index');
});

// routes/web.php
Route::get('/images/{id}', 'ImageController@show');
