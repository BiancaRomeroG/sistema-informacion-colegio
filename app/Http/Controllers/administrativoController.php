<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\administrativos;
use App\Models\usuario;
use Illuminate\Support\Facades\Hash;

class administrativoController extends Controller
{
    public function index() {
        $personas = Persona::join('administrativos', 'personas.id', 'administrativos.id_persona')
        ->orderBy('personas.id', 'asc')->paginate();
        return view('administrativo.index', compact('personas'));
    }
    public function show($administrativo) {
        $persona = Persona::find(administrativos::findOrFail($administrativo)->id_persona);
        return view('administrativo.show', compact('persona'));
    }
    public function create(){
        $actionform = route("administrativo.store"); 
        return view('administrativo.create', compact('actionform'));
    }
    public function store (Request $request){
        $persona = Persona::create([
            'nombre'=> $request->nombre,
            'apellido_pat' => $request->apellido_pat,
            'apellido_mat' => $request-> apellido_mat,
            'ci' => $request->ci,
            'fecha_nac' => $request->fecha_nac,
            'sexo'=> $request->sexo,
            'email'=> $request->email,
            'direccion'=> $request->direccion,
            'telefono'=>$request->telefono ,
        ]);
        $persona->save();

        $usuario = new usuario();
        $usuario->nombre_usuario = $persona->email;
        $usuario->contrasenha = Hash::make($persona->ci);
        $usuario->id_rol = 3;
        $usuario->estado = 1;
        $usuario->save();

        $administrativo = new administrativos();
        $administrativo->id_persona = $persona->id;
        $administrativo->profesion = $request->profesion;
        $administrativo->id_usuario = $usuario->id;
        $administrativo->save();
      
       return redirect()->back()->with(
        'success',
        'Administrativo creado correctamente'
    );
    }

    public function edit($id){
        $administrativo = administrativos::findOrFail($id);
        $persona = Persona::findOrFail($administrativo->id_persona);
        $actionform = route('administrativo.update',[$administrativo->id]); 
       return view('administrativo.edit', compact('administrativo','persona','actionform'));
      
    }

    public function update($id, Request $request){

        $administrativo = administrativos::findOrFail($id);
        $administrativo->profesion = $request->profesion;
        $administrativo->save();

        $persona = Persona::findOrfail($administrativo->id_persona);

        $persona->nombre= $request->nombre;
        $persona->apellido_pat = $request->apellido_pat;
        $persona->apellido_mat = $request-> apellido_mat;
        $persona->ci = $request->ci;
        $persona->fecha_nac = $request->fecha_nac;
        $persona->sexo= $request->sexo;
        $persona->email= $request->email;
        $persona->direccion= $request->direccion;
        $persona->telefono=$request->telefono; 

        $persona->save();

        return view('administrativo.show', compact('persona'));

    }

    public function destroy($id){
        $administrativo= administrativos::findOrFail($id);
        $administrativo->delete();
        return redirect()->route('administrativo.index');
    }


}
