<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistro;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function homePage(){
        return view('home');
    }

    public function registroPage() {
        return view('registro');
    }
}
