<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\materiaController;
use App\Http\Controllers\registroController;
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


Auth::routes();

Route::get('/', [\App\Http\Controllers\Auth\loginController::class, 'showLoginForm']);

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'homePage'])->name('home')->middleware('auth');
Route::resource('home', homeController::class);

Route::get('/profesor', [HomeController::class, 'profesorPage'])->middleware('auth');

Route::get('/admin', [HomeController::class, 'administrativoPage'])->middleware('director');

Route::get('/registro', [HomeController::class, 'registroPage'])->middleware('director');
Route::post('/registro',[registroController::class, 'store'])->name('registro.store')->middleware('director');

Route::get('/registro-materia', [materiaController::class, 'registro'])->name('materia.registro');

Route::get('/apoderado', [HomeController::class, 'apoderadoPage']);

Route::resource('/materia', materiaController::class);

Route::get('/hola', function () {
    return "Hola";
});
