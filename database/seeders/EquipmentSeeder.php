<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $equipments = [
            ['name' => 'Bodyweight'],
            ['name' => 'Dumbbells'],
            ['name' => 'Barbell'],
            ['name' => 'Bench Press'],
            ['name' => 'Power Rack'],
            ['name' => 'Kettlebell'],
            ['name' => 'Treadmill'],
            ['name' => 'Rowing Machine'],
        ];

        Equipment::insert($equipments);
    }
}
