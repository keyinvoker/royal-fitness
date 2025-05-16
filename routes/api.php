<?php

use App\Http\Controllers\ExerciseApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get(
        'exercises',
        [ExerciseApiController::class, 'getList']
    )->name('api.exercises');
});
