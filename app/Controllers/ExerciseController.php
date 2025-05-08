<?php

namespace App\Controllers;

use App\Repositories\ExerciseRepository;

class ExerciseController {

    public function __construct(
        protected ExerciseRepository $repo,
    )
    {
        $this->repo = $repo;
    }

    public function getExerciseList(int $offset = 0, ?int $limit = null)
    {
        return $this->repo->getAll($offset, $limit);
    }
}
