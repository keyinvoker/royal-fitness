<?php

namespace App\Http\Controllers;

use App\Repositories\ExerciseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExerciseApiController extends Controller
{

    public function __construct(
        protected ExerciseRepository $repo,
    )
    {
        $this->repo = $repo;
    }

    public function getList(Request $request)
    {
        try {
            $payload = $request->validate([
                'exercise_type' => 'required|string|max:255',
                'offset' => 'nullable|integer|min:0',
                'limit' => 'nullable|integer|min:1',
            ]);
    
            $exerciseType = $payload['exercise_type'];
            $offset = $payload['offset'] ?? 0;
            $limit = $payload['limit'] ?? 10;
    
            $data = $this->repo->getAll(
                exerciseType: $exerciseType,
                offset: $offset,
                limit: $limit,
            );

            return response()->json([
                'code' => 200,
                'message' => 'Successfully fetched exercises',
                'data' => $data,
            ], 200);
        } catch (\Exception $e) {
            Log::error("ExerciseApi:getList :: {$e->getMessage()} ({$e->getFile()} line {$e->getLine()})");
            return response()->json([
                'code' => 500,
                'message' => 'An unexpected error occured',
                'errors' => $e->getMessage(),
            ], 500);
        }
    }
}
