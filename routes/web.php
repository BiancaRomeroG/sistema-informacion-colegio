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
Route::get('/home', [HomeController::class, 'homePage'])->name('home')->middleware('auth');

Route::group(['prefix' => 'administrativo'], function () {
    
    Route::get('/admin', [HomeController::class, 'administrativoPage'])->middleware('director');
    Route::get('/registro', [HomeController::class, 'registroPage'])->middleware('director');
    Route::post('/registro',[registroController::class, 'store'])->name('registro.store')->middleware('director');
    Route::get('/apoderado', [HomeController::class, 'crearApoderado']);
    Route::get('/crear', [homeController::class, 'newAdminPage'])->middleware('director');
    Route::get('/alumno', [HomeController::class, 'alumnoPage']);
    Route::get('/crear_curso', [HomeController::class, 'curso_create']);
    Route::get('/crear', [homeController::class, 'crearProfesor'])->middleware('director');
});


Route::group(['prefix' => 'profesor'], function(){

    Route::get('/index', [HomeController::class, 'profesorPage'])->middleware('auth');
    

    
});



Route::get('/test', function () {
    return view('welcome');
});


Route::resource('home', homeController::class);











Route::resource('/materia', materiaController::class);




