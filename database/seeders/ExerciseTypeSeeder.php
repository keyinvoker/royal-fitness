<?php

namespace Database\Seeders;

use App\Models\ExerciseType;
use Illuminate\Database\Seeder;

class ExerciseTypeSeeder extends Seeder
{
    public function run(): void
    {
        $exerciseTypes = [
            ['name' => 'lean'],
            ['name' => 'bulk'],
            ['name' => 'strength'],
            ['name' => 'endurance'],
        ];

        ExerciseType::insert($exerciseTypes);
    }
}
