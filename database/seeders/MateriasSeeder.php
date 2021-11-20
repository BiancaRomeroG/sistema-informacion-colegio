<?php

namespace Database\Seeders;

use App\Models\materias;
use Illuminate\Database\Seeder;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materia = new materias();
        $materia->nombre = 'Literatura';
        $materia->descripcion = null;
        $materia->id_profesor = 61;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Matematicas';
        $materia->descripcion = null;
        $materia->id_profesor = 62;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Fisica';
        $materia->descripcion = null;
        $materia->id_profesor = 63;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Quimica';
        $materia->descripcion = null;
        $materia->id_profesor = 64;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Religion';
        $materia->descripcion = null;
        $materia->id_profesor = 65;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Biologia';
        $materia->descripcion = null;
        $materia->id_profesor = 66;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Historia';
        $materia->descripcion = null;
        $materia->id_profesor = 67;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Educacion Fisica';
        $materia->descripcion = null;
        $materia->id_profesor = 68;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Educacion Musical';
        $materia->descripcion = null;
        $materia->id_profesor = 69;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Psicologia';
        $materia->descripcion = null;
        $materia->id_profesor = 70;
        $materia->timestamps = false;
        $materia->save();
        
        
    }
}
