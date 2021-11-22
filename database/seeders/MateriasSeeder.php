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
        $materia->id_profesor = 1;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Matematicas';
        $materia->descripcion = null;
        $materia->id_profesor = 2;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Fisica';
        $materia->descripcion = null;
        $materia->id_profesor = 3;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Quimica';
        $materia->descripcion = null;
        $materia->id_profesor = 4;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Religion';
        $materia->descripcion = null;
        $materia->id_profesor = 5;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Biologia';
        $materia->descripcion = null;
        $materia->id_profesor = 6;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Historia';
        $materia->descripcion = null;
        $materia->id_profesor = 7;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Educacion Fisica';
        $materia->descripcion = null;
        $materia->id_profesor = 8;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Educacion Musical';
        $materia->descripcion = null;
        $materia->id_profesor = 9;
        $materia->timestamps = false;
        $materia->save();
        
        $materia = new materias();
        $materia->nombre = 'Psicologia';
        $materia->descripcion = null;
        $materia->id_profesor = 10;
        $materia->timestamps = false;
        $materia->save();
        
    }
}
