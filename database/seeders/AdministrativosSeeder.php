<?php

namespace Database\Seeders;

use App\Models\administrativos;
use Illuminate\Database\Seeder;

class AdministrativosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new administrativos();
        $admin->id = 71;
        $admin->profesion = "Lic. Pedagogia";
        $admin->id_usuario = 11;
        $admin->save();

        $admin = new administrativos();
        $admin->id = 72;
        $admin->profesion = "Lic. Contabilidad";
        $admin->id_usuario = 12;
        $admin->save();
    }
}
