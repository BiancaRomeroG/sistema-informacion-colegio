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
        $admin->id_admin = 100160;
        $admin->profesion = "Lic. Pedagogia";
        $admin->id_usuario = 200111;
        $admin->save();

        $admin = new administrativos();
        $admin->id_admin = 100161;
        $admin->profesion = "Lic. Contabilidad";
        $admin->id_usuario = 200110;
        $admin->save();
    }
}
