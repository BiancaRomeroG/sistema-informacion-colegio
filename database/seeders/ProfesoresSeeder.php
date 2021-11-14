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
        $id_pers_prof = 100150;
        $cant_prof = 10;
        $id_user_prof = 200100;
        while ($cant_prof > 0) {
            $prof = new profesores();
            $prof->id_profesor = $id_pers_prof;
            $prof->profesion = null;
            $prof->id_usuario = $id_user_prof;
            $prof->save();

            $id_user_prof++;
            $id_pers_prof++;
            $cant_prof--;
        }
    }
}
