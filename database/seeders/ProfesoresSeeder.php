<?php

namespace Database\Seeders;

use App\Models\profesores;
use Illuminate\Database\Seeder;

class ProfesoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prof = new profesores();
        $prof->id = 61;
        $prof->profesion = null;
        $prof->id_usuario = 1;
        $prof->save();
        
        $prof = new profesores();
        $prof->id = 62;
        $prof->profesion = null;
        $prof->id_usuario = 2;
        $prof->save();
        
        $prof = new profesores();
        $prof->id = 63;
        $prof->profesion = null;
        $prof->id_usuario = 3;
        $prof->save();
        
        $prof = new profesores();
        $prof->id = 64;
        $prof->profesion = null;
        $prof->id_usuario = 4;
        $prof->save();
        
        $prof = new profesores();
        $prof->id = 65;
        $prof->profesion = null;
        $prof->id_usuario = 5;
        $prof->save();
        
        $prof = new profesores();
        $prof->id = 66;
        $prof->profesion = null;
        $prof->id_usuario = 6;
        $prof->save();
        
        $prof = new profesores();
        $prof->id = 67;
        $prof->profesion = null;
        $prof->id_usuario = 7;
        $prof->save();
        
        $prof = new profesores();
        $prof->id = 68;
        $prof->profesion = null;
        $prof->id_usuario = 8;
        $prof->save();
        
        $prof = new profesores();
        $prof->id = 69;
        $prof->profesion = null;
        $prof->id_usuario = 9;
        $prof->save();
        
        $prof = new profesores();
        $prof->id = 70;
        $prof->profesion = null;
        $prof->id_usuario = 10;
        $prof->save();
    }
}
