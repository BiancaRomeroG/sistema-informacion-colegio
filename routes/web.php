<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
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

Route::post('/login',[sessionController::class, 'login'])->name('session.login');
