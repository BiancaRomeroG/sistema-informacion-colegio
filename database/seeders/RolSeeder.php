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
        $rol->nombre_rol = "Director";
        $rol->timestamps = false;
        $rol->save();

        $rol = new rol();
        $rol->nombre_rol = "Secretaria";
        $rol->timestamps = false;
        $rol->save();

        $rol = new rol();
        $rol->nombre_rol = "Profesor";
        $rol->timestamps = false;
        $rol->save();

    }
}
