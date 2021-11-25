<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use App\Http\Requests\StorePersona;

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
