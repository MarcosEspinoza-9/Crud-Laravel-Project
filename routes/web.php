<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\NuevoAlumnoController;

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
    return view('welcome');
});

// Route::resource('/alumnos',AlumnoController::class);

Route::resource('/nuevo-alumnos',NuevoAlumnoController::class);



Route::get('/alumnos', function () {
    return view('layout.main');
});



/*

En caso de no usaer el resource habria que usar el siguiente fragmento de codigo con cada metodo
Route::get('/alumnos', [AlumnoController::class],'index');
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
