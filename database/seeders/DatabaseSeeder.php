<?php

namespace Database\Seeders;

use App\Models\desarrolla;
use App\Models\pagoSalarios;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PersonaSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(ProfesoresSeeder::class);
        $this->call(MateriasSeeder::class);
        $this->call(CursosSeeder::class);
        $this->call(DesarrollaSeeder::class);
        $this->call(TutoresSeeder::class);
        $this->call(AlumnosSeeder::class);
        $this->call(CardexSeeder::class);
        $this->call(BoletinesSeeder::class);
        $this->call(NotasSeeder::class);
        $this->call(AdministrativosSeeder::class);
        $this->call(PagosSeeder::class);
        $this->call(PagoSalariosSeeder::class);
        $this->call(PagoMensualidadSeeder::class);
        $this->call(InscripcionesSeeder::class);
    }
}
