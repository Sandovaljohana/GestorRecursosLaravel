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
    return view('bitlab');
});
Route::get('/navbarTop', function () {
    return view('template/navbarTop');
});
Route::get('/navbarLeft', function () {
    return view('template/navbarLeft');
});
Route::get('/files', function () {
    return view('template/files');
});