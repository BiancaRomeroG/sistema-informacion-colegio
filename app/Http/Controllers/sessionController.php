<?php

namespace App\Http\Controllers;

use Illuminate\Bus\Batch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sessionController extends Controller
{
    public function login(Request $request){
        $usuario = $request->usuarioI;
        $password = $request->passwordI;
        /*
        if (Auth::attempt(['usuario' => $usuario, 'password' => $password])) {
            return redirect("/home");
        }*/
        if ($usuario == "Juanito" && $password == "123"){
            return view("/home");
        }
         return back()->withErrors([
            'message' => 'nuuuuuuuuuuu',
        ]);
    }
}
