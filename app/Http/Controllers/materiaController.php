<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMateria;
use App\Models\alumnos;
use App\Models\materias;
use App\Models\Persona;
use App\Models\profesores;
use App\Models\tutores;
use Faker\Provider\ar_JO\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class materiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware("roles:Director,Secretaria,none")->except('index','show');
        $this->middleware("roles:Director,Secretaria,Profesor")->only('index','show'); 
    }
    
    public function index() {
        $materias = Persona::join('profesores', 'profesores.id_persona', 'personas.id')
                           ->join('materias', 'materias.id_profesor', 'profesores.id')
        ->select('materias.id AS idMateria', 'profesores.id AS idProfesor', 'materias.nombre', 'materias.descripcion', 'personas.nombre AS nombrePersona', 'personas.apellido_pat', 'personas.apellido_mat')
        ->orderBy('personas.id', 'asc')->paginate(14);;
        return view('Materia.index', compact('materias'))->with('i', (request()->input('page', 1) - 1) * 14);;
    }

    public function store(StoreMateria $request) {
        $materia = materias::create($request->all());
        $materia->save();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Materia creada ID: '.$materia->id);

        return redirect()->route('Materia.index');
    }

    public function show($id) {
        $materia = materias::find($id);
        $profesor = profesores::find($materia->id_profesor);
        $persona = Persona::find($profesor->id_persona);
        return view('Materia.show', compact('materia', 'persona'));
    }

    public function destroy($id){
        $materia = materias::findOrFail($id);
        $materia->delete();

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Materia eliminada ID: '.$materia->id);

        return redirect()->route('Materia.index')->with('success', 'Materia eliminada');
    }

    public function create(){ 
        $profesores = Persona::join('profesores', 'personas.id', 'profesores.id_persona')
        ->select('profesores.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')->get();
        return view('Materia.create', compact('profesores'));
    }

    public function edit($id){
        $materia = materias::find($id);
        $profesores = Persona::join('profesores', 'personas.id', 'profesores.id_persona')
        ->select('profesores.id', 'personas.nombre', 'personas.apellido_pat', 'personas.apellido_mat')->get();
        $actionform = route('materia.update', $id);
        return view('Materia.edit', compact('profesores', 'materia', 'actionform'));
    }

    public function update($id, StoreMateria $request) {
        $materia = materias::findOrFail($id);
        $materia->update($request->all());

        bitacoraController::bitacoraRegister(Auth::user()->id, 'Modificacion de datos Materia ID: '.$materia->id);

        return redirect()->route('Materia.show', $materia)->with('success', 'Materia editada correctamente');
    }
}
