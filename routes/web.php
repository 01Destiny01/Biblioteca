<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaController;

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
    return view('home', [HomeController::class]);
})-> name('home');
Route::middleware(['auth'])->group(function(){


 

});

Auth::routes();
Route::get('/home', [App\Http\Controllers\BibliotecaController::class, 'index'])->name('home');
Route::get('/Biblioteca/index', [App\Http\Controllers\BibliotecaController::class, 'index'])->name('biblioteca');
Route::get('/Biblioteca/createPrestamo', [App\Http\Controllers\BibliotecaController::class, 'createPrestamo']);
Route::get('/Biblioteca/getperfil', [App\Http\Controllers\BibliotecaController::class, 'getperfil']);
Route::get('/Biblioteca/showLibros', [App\Http\Controllers\BibliotecaController::class, 'showLibros']);
Route::get('/Biblioteca/showLibrosPrestados', [App\Http\Controllers\BibliotecaController::class, 'showLibrosPrestados']);

Route::controller(BibliotecaController::class)->group(function(){
//Route::get('Biblioteca/create','create');
Route::get('Biblioteca/show','show')->name('show');

#Route::get('Biblioteca/index','index');

//Route::get('Biblioteca/show','create');



});

?>






