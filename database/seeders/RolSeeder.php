<?php

namespace Database\Seeders;

use App\Models\rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new rol();
        $rol->nombre_rol = "Director general";
        $rol->timestamps = false;
        $rol->save();

        $rol = new rol();
        $rol->nombre_rol = "Secretaría";
        $rol->timestamps = false;
        $rol->save();

        $rol = new rol();
        $rol->nombre_rol = "Profesor";
        $rol->timestamps = false;
        $rol->save();

    }
}
