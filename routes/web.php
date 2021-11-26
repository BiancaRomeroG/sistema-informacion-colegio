<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\materiaController;
use App\Http\Controllers\registroController;
use App\Http\Controllers\sessionController;
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

Route::get('/', loginController::class)->name('login');

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, 'homePage'])->name('home');

Route::get('/registro', [HomeController::class, 'registroPage']);
Route::get('/profesor', [HomeController::class, 'profesorPage']);
Route::get('/admin', [HomeController::class, 'administrativoPage']);

Route::post('/registro',[registroController::class, 'store'])->name('registro.store');

Route::post('/login',[sessionController::class, 'login'])->name('session.login');

Route::get('/registro-materia', [materiaController::class, 'registro'])->name('materia.registro');

