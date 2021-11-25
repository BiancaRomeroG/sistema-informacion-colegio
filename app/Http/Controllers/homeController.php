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
        return view('profesor');
    }

    public function administrativoPage() {
        return view('administrativo');
    }
}
