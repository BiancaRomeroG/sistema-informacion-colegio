<?php

namespace Database\Seeders;

use App\Models\tutores;
use Illuminate\Database\Seeder;

class TutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id_tutor = 100130;
        $parentesco = [""];

        while ($id_tutor < 100150) {
            $tutor = new tutores();
            $tutor->id_tutor = $id_tutor;
            $tutor->parentesco = "Tio(a)";
            $tutor->save();
            
            $id_tutor++;
        }
    }
}
