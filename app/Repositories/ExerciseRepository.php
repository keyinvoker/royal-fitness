<?php

namespace App\Repositories;

use App\Models\Exercise;
use Illuminate\Support\Facades\Log;

class ExerciseRepository
{
    protected Exercise $model;

    public function __construct()
    {
        $this->model = new Exercise();
    }

    public function getAll(
        ?string $exerciseType = null,
        string $orderDirection = 'ASC',
        int $offset = 0,
        int $limit = 10,
    ) {
        $query = $this->model->select(
                'exercise_types.name AS exercise_type',
                'exercises.name',
                'exercises.duration_minutes',
                'exercises.video_url',
                'exercises.description',
                'equipments.name AS equipment',
            )
            ->join('exercise_types', 'exercise_types.id', '=', 'exercises.type_id')
            ->join('equipments', 'equipments.id', '=', 'exercises.equipment_id')
        ;
        if ($exerciseType) {
            $query->where('exercise_types.name', $exerciseType);
        }

        $result = $query
            ->orderBy('exercises.id', $orderDirection)
            ->take($limit)
            ->skip($offset)
            ->get();
        
        return [
            'items' => $result,
            'offset' => $offset,
            'limit' => $limit,
            'total' => $query->count(),
        ];
    }

    public function findOne(int $id): Exercise
    {
        return $this->model->where('id', $id);
    }
}
