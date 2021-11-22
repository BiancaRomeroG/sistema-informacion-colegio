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
        $prof->id_persona = 61;
        $prof->profesion = null;
        $prof->id_usuario = 1;
        $prof->save();
        
        $prof = new profesores();
        $prof->id_persona = 62;
        $prof->profesion = null;
        $prof->id_usuario = 2;
        $prof->save();
        
        $prof = new profesores();
        $prof->id_persona = 63;
        $prof->profesion = null;
        $prof->id_usuario = 3;
        $prof->save();
        
        $prof = new profesores();
        $prof->id_persona = 64;
        $prof->profesion = null;
        $prof->id_usuario = 4;
        $prof->save();
        
        $prof = new profesores();
        $prof->id_persona = 65;
        $prof->profesion = null;
        $prof->id_usuario = 5;
        $prof->save();
        
        $prof = new profesores();
        $prof->id_persona = 66;
        $prof->profesion = null;
        $prof->id_usuario = 6;
        $prof->save();
        
        $prof = new profesores();
        $prof->id_persona = 67;
        $prof->profesion = null;
        $prof->id_usuario = 7;
        $prof->save();
        
        $prof = new profesores();
        $prof->id_persona = 68;
        $prof->profesion = null;
        $prof->id_usuario = 8;
        $prof->save();
        
        $prof = new profesores();
        $prof->id_persona = 69;
        $prof->profesion = null;
        $prof->id_usuario = 9;
        $prof->save();
        
        $prof = new profesores();
        $prof->id_persona = 70;
        $prof->profesion = null;
        $prof->id_usuario = 10;
        $prof->save();
    }
}
