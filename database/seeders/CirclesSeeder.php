<?php

namespace Database\Seeders;

use App\Models\Circle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Factories\CirclesFactory;

class CirclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Circle::factory(10)->create();
    }
}
