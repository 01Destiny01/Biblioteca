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
})-> name('home');

Route::post('solucion', function () {
    return view('solucion');
})-> name('solucion');

Route::get('login', function () {
    return view('login');
})-> name('login');

Route::get('informacion', function () {
    return view('informacion');
})-> name('informacion');
?>