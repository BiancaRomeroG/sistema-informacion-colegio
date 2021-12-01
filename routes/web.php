<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\materiaController;
use App\Http\Controllers\registroController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'homePage'])->name('home')->middleware('auth');
Route::resource('home', homeController::class);

Route::get('/profesor', [HomeController::class, 'profesorPage'])->middleware('auth');

Route::get('/admin', [HomeController::class, 'administrativoPage'])->middleware('director');

Route::get('/registro', [HomeController::class, 'registroPage'])->middleware('director');
Route::post('/registro',[registroController::class, 'store'])->name('registro.store')->middleware('director');

Route::get('/apoderado', [HomeController::class, 'crearApoderado']);
Route::get('/createAdmin', [homeController::class, 'newAdminPage'])->middleware('director');
Route::get('/createProfesor', [homeController::class, 'crearProfesor'])->middleware('director');

Route::resource('/materia', materiaController::class);

Route::get('/alumno', [HomeController::class, 'alumnoPage']);

Route::get('/crear_curso', [HomeController::class, 'curso_create']);