<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Campuse;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Campuse::create([
            'description' => 'Campus de pau',
            'adresse' => 'Allée du park montory',
            'Type' => 'Informatique'
        ]);

        Campuse::create([
            'description' => 'Campus de Bordeauw',
            'adresse' => 'Allée des chartrons',
            'Type' => 'GEA'
        ]);
    }
}
