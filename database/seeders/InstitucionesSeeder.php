<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Institucion;

class InstitucionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Institucion::create([
            'nombre' => 'Tecsup',
            'ubicacion' => 'Lima, Ate',
        ]);

        Institucion::create([
            'nombre' => 'Aduni',
            'ubicacion' => 'Lima, Ate',
        ]);

        Institucion::create([
            'nombre' => 'Inmaculada',
            'ubicacion' => 'Lima, Ate',
        ]);
    }
}
