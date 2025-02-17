<?php

use App\Http\Controllers\LibrosController;
use App\Http\Controllers\RegistrarseController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:usuarios', 'check.user.type:0'])->group(function(){

Route::get('/libros/crear',[LibrosController::class,'crear'])->name('libros.crear');

Route::post('/libros/store',[LibrosController::class,'store'])->name('libros.store');

Route::get('/libros/leer',[LibrosController::class,'leer'])->name('libros.leer');

Route::put('/libros/{libro}',[LibrosController::class,'update'])->name('libros.update');

Route::get('/libros/eliminar',[LibrosController::class,'eliminar'])->name('libros.eliminar');
Route::post('/libros/destroy',[LibrosController::class,'destroy'])->name('libros.destroy');

Route::get('/libros/pdf',[LibrosController::class,'GenerarPDF'])->name('libros.pdf');

Route::get('/libros/registrarse', [RegistrarseController::class, 'registrarse'])->name('libros.registrarse');
Route::post('/libros/registrar', [RegistrarseController::class, 'registrar'])->name('libros.registrar');

});

Route::get('/libros/inicio',[LibrosController::class,'inicio'])->name('libros.inicio');



Route::get('/libros/consultar',[LibrosController::class,'consultar'])->name('libros.consultar');
Route::post('/libros/pdfID',[LibrosController::class,'GenerarPDFId'])->name('libros.pdfID');




Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
