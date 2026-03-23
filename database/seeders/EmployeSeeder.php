<?php

namespace Database\Seeders;

use App\Models\Employe;
use Illuminate\Database\Seeder;

class EmployeSeeder extends Seeder
{
    public function run()
    {
        // Utilise la syntaxe moderne pour les Factories
        Employe::factory()->count(10)->create();
    }
}
