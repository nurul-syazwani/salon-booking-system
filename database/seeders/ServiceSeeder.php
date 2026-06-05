<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Service::create([
            'name' => 'Haircut',
            'description' => 'Professional haircut and styling.',
            'price' => 35.00,
            'duration' => 45,
        ]);

        \App\Models\Service::create([
            'name' => 'Hair Coloring',
            'description' => 'Premium hair coloring treatment.',
            'price' => 150.00,
            'duration' => 120,
        ]);

        \App\Models\Service::create([
            'name' => 'Facial Spa',
            'description' => 'Relaxing facial spa treatment.',
            'price' => 80.00,
            'duration' => 60,
        ]);
    }
}
