<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
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

Route::get('/', loginController::class)->name('login');

//ruta por demas, la de arriba llama al login como ruta principal
Route::get('/login', function () {
    return view('login');
});
//---------------------------------------------------------------

Route::get('/home', [HomeController::class, 'homePage']);

Route::get('/registro', [HomeController::class, 'registroPage']);

