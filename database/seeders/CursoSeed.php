<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::factory(50)->create();
        User::factory(10)->create();
    }
}
