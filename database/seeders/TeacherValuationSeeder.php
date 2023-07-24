<?php

namespace Database\Seeders;

use App\Models\Teacher_valuation;
use Database\Factories\TeacherValuationFactory as FactoriesTeacherValuationFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Factories\TeacherValuationFactory;

class TeacherValuationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher_valuation::factory(10)->create();
    }
}
