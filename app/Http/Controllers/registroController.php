<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersona;
use App\Models\Persona;
use Illuminate\Http\Request;

class registroController extends Controller
{
    public function __invoke()
    {
        return view('registro');
    }

    public function store( Request $request){
      
        $persona = Persona::create($request->all());

        $persona->save();

        return redirect('registro');
    }
}