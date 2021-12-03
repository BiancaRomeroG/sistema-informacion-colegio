<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function registroPage() {
        return view('registro');
    }
  
    public function profesorPage() {
        return view('Profesor/profesor');
    }

    public function administrativoPage() {
        return view('Administrativo/administrativo');
    }

    // public function crearApoderado() {
    //     return view('Apoderado/apoderado');
    // }

    public function alumnoPage() {
        return view('Alumno/create');
    }

    public function newAdminPage(){
        return view('Administrativo/newAdministrativo');
    }

    public function crearProfesor(){
        return view('Profesor/newProfesor');
    }

    public function curso_create(){
        return view('Curso/cursoCreate');
    }

    public function inscripcionPage(){
        return view('Inscripcion/inscripcion');
    }
}
