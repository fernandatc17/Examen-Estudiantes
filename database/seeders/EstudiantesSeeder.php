<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estudiante::create([
            'nombre' => 'Abigail ',
            'apellido' => 'Ticlavilca',
            'email' => 'abigail@gmail.com',
            'edad' => 18,
            'institucion_id' => 1,
        ]);

        Estudiante::create([
            'nombre' => 'Esmeralda',
            'apellido' => 'Ticlavilca',
            'email' => 'esmeralda@gmail.com',
            'edad' => 16,
            'institucion_id' => 2,
        ]);

        Estudiante::create([
            'nombre' => 'Ruth',
            'apellido' => 'Ticlavilca',
            'email' => 'ruth@gmail.com',
            'edad' => 13,
            'institucion_id' => 1,
        ]);
    }
}
