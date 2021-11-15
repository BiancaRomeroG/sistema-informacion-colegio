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
        $materias = ["Literatura", "Matematicas", "Fisica", "Quimica", "Religion", "Biologia",
                     "Historia", "Educacion Fisica", "Educacion Musical", "Psicologia"];
        
        $i = 0;
        $id_prof = 100150;
        while ($i < count($materias)) {
            $mat = new materias();
            $mat->nombre = $materias[$i];
            $mat->descripcion = null;
            $mat->id_profesor = $id_prof;
            $mat->timestamps = false;
            $mat->save();

            $id_prof++;
            $i++;
        }
    }
}
