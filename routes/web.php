<?php

use App\Http\Controllers\administrativoController;
use App\Http\Controllers\alumnoController;
use App\Http\Controllers\bitacoraController;
use App\Http\Controllers\apoderadoController;
use App\Http\Controllers\boletinController;
use App\Http\Controllers\cardexController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\inscripcionController;
use App\Http\Controllers\materiaController;
use App\Http\Controllers\pagoMensualidadController;
use App\Http\Controllers\pagoSalarioController;
use App\Http\Controllers\profesorController;
use App\Http\Controllers\registroController;
use App\Http\Controllers\usuarioController;
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

    Route::get('/crear', [homeController::class, 'newAdminPage'])->middleware('director');
    //Route::get('/alumno', [HomeController::class, 'alumnoPage']);
    Route::get('/crear_curso', [HomeController::class, 'curso_create']);
    //Route::get('/crear', [homeController::class, 'crearProfesor'])->middleware('director');
    Route::get('/inscripcion', [HomeController::class, 'inscripcionPage']);
   });

// Route::group(['prefix' => 'profesor'], function(){

//     Route::get('/index', [HomeController::class, 'profesorPage'])->middleware('auth');

// });

//                                           //
// Usar Rutas resources mientras             //
// se busque solucion para rutas prefijos    //
//                                           //


//ruta para el home
Route::resource('home', homeController::class);

//ruta para alumno
Route::resource('alumno', alumnoController::class);

//ruta para apoderado
Route::resource('apoderado', apoderadoController::class);

//ruta para profesor
Route::resource('profesor', profesorController::class);

//ruta para administrativo
Route::resource('administrativo', administrativoController::class);

//ruta para usuario
Route::resource('usuario', usuarioController::class);

//ruta para materia
Route::resource('materia', materiaController::class);

//ruta para curso
Route::resource('curso', cursoController::class)->except(['show','destroy']);
Route::get('/curso/{id}/{gestion}',[cursoController::class, 'show'])->name('curso.show');

//ruta para la inscripcion
Route::resource('inscripcion', inscripcionController::class);

//ruta para pago mensualidad
Route::resource('mensualidad', pagoMensualidadController::class);


//ruta para cardex
Route::resource('cardex', cardexController::class);


//ruta para bitacora
Route::resource('bitacora', bitacoraController::class)->only(['show']);


//ruta para pago salario
Route::resource('salario',pagoSalarioController::class);

Route::get('/boleta/{id}/trim1',[boletinController::class, 'trim1'])->name('boletin.trim1');

Route::get('/boleta/{id}/trim2',[boletinController::class, 'trim2'])->name('boletin.trim2');

Route::get('/boleta/{id}/trim3',[boletinController::class, 'trim3'])->name('boletin.trim3');

//ruta para boletin
Route::resource('boletin',boletinController::class);



