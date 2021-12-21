<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdministrativo;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\administrativos;
use App\Models\usuario;
use Illuminate\Support\Facades\Hash;

class administrativoController extends Controller
{
    public function index() {
        $personas = Persona::join('administrativos', 'personas.id', 'administrativos.id_persona')
        ->orderBy('personas.id', 'desc')->paginate(14);
        return view('administrativo.index', compact('personas'))->with('i', (request()->input('page', 1) - 1) * 14);
    }
   
    public function show($administrativoId) {
        $administrativo = administrativos::findOrFail($administrativoId);
        $persona = Persona::find($administrativo->id_persona);
        return view('administrativo.show', compact('persona', 'administrativo'));
    }
    
    public function create(){
        $actionform = route("administrativo.store"); 
        return view('administrativo.create', compact('actionform'));
    }
    public function store (StoreAdministrativo $request){
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
        $usuario->id_rol = 2;
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

    public function update($id, StoreAdministrativo $request){

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

        return redirect()->route('administrativo.show', $administrativo->id)->with('success', 'Administrativo editado correctamente');

    }

    public function destroy($id){
        $persona = Persona::findOrFail($id);   
        $persona->delete();
        return redirect()->route('administrativo.index')->with('success', 'Administrativo eliminado correctamente');
    }

}
