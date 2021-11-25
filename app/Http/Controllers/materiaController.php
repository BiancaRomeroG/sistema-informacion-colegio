<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class materiaController extends Controller
{
    public function registro(){
        return view("/materiaRegistro");
    }
}
