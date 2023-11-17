<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        \App\Models\User::factory()->create([
            'name' => 'Darío',
            'lastname' => 'Contreras Abaca',
            'email' => 'dario.contreras@alumnos.ucn.cl',
            'city' => 'Antofagasta',
            'country' => 'Chile',
            'summary' => 'Estudiante de la carrera de Ing. Civil en Computación e Informática de la Universidad Católica del Norte.',
        ]);
    }
}
