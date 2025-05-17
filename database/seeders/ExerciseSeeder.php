<?php

namespace Database\Seeders;

use App\Models\Equipment;
use App\Models\Exercise;
use App\Models\ExerciseType;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    public function run(): void
    {
        $lean = ExerciseType::where('name', 'lean')->value('id');
        $bulk = ExerciseType::where('name', 'bulk')->value('id');
        $strength = ExerciseType::where('name', 'strength')->value('id');
        $endurance = ExerciseType::where('name', 'endurance')->value('id');

        $bodyweight = Equipment::where('name', 'Bodyweight')->value('id');
        $dumbbells = Equipment::where('name', 'Dumbbells')->value('id');
        $barbell = Equipment::where('name', 'Barbell')->value('id');
        $benchPress = Equipment::where('name', 'Bench Press')->value('id');
        $powerRack = Equipment::where('name', 'Power Rack')->value('id');
        $kettlebell = Equipment::where('name', 'Kettlebell')->value('id');
        $treadmill = Equipment::where('name', 'Treadmill')->value('id');
        $rowingMachine = Equipment::where('name', 'Rowing Machine')->value('id');

        $exercises = [
            [
                'name' => 'HIIT Training',
                'description' => 'High-intensity interval training for fat loss and lean muscle',
                'video_url' => 'https://www.youtube.com/embed/MLSSn2h9Cw8',
                'duration_minutes' => 30,
                'equipment_id' => $bodyweight,
                'type_id' => $lean,
            ],
            [
                'name' => 'Circuit Training',
                'description' => 'Full-body workout combining strength and cardio',
                'video_url' => 'https://www.youtube.com/embed/eGgDlEeN8DY',
                'duration_minutes' => 45,
                'equipment_id' => $dumbbells,
                'type_id' => $lean,
            ],
            [
                'name' => 'Deadlifts',
                'description' => 'Compound exercise for overall muscle growth',
                'video_url' => 'https://www.youtube.com/embed/op9kVnSso6Q',
                'duration_minutes' => 45,
                'equipment_id' => $barbell,
                'type_id' => $bulk,
            ],
            [
                'name' => 'Bench Press',
                'description' => 'Upper body strength building exercise',
                'video_url' => 'https://www.youtube.com/embed/4Y2ZdHCOXok',
                'duration_minutes' => 45,
                'equipment_id' => $benchPress,
                'type_id' => $bulk,
            ],
            [
                'name' => 'Powerlifting',
                'description' => 'Focus on maximal strength development',
                'video_url' => 'https://www.youtube.com/embed/8AoeUCf7xfI',
                'duration_minutes' => 60,
                'equipment_id' => $powerRack,
                'type_id' => $strength,
            ],
            [
                'name' => 'Kettlebell Swings',
                'description' => 'Develop explosive hip power',
                'video_url' => 'https://www.youtube.com/embed/mKDIuUbH94Q',
                'duration_minutes' => 30,
                'equipment_id' => $kettlebell,
                'type_id' => $strength,
            ],
            [
                'name' => 'Long-Distance Running',
                'description' => 'Improve cardiovascular endurance',
                'video_url' => 'https://www.youtube.com/embed/5umbfHn_mgA',
                'duration_minutes' => 60,
                'equipment_id' => $treadmill,
                'type_id' => $endurance,
            ],
            [
                'name' => 'Rowing Machine Workouts',
                'description' => 'Full-body endurance training',
                'video_url' => 'https://www.youtube.com/embed/8S6dE1VjH40',
                'duration_minutes' => 45,
                'equipment_id' => $rowingMachine,
                'type_id' => $endurance,
            ],
        ];

        Exercise::insert($exercises);
    }
}
