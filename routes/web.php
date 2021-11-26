<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
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


Auth::routes();

Route::get('/', [\App\Http\Controllers\Auth\loginController::class, 'showLoginForm']);

Route::get('/test', function () {
    return view('welcome');
});
Route::get('/home', [HomeController::class, ''])->name('home');

Route::get('/registro', [HomeController::class, 'registroPage']);
Route::get('/profesor', [HomeController::class, 'profesorPage']);
Route::get('/admin', [HomeController::class, 'administrativoPage']);

Route::post('/registro',[registroController::class, 'store'])->name('registro.store');



Route::resource('home', homeController::class);