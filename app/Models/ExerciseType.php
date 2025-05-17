<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExerciseType extends Model
{
    use HasFactory;

    protected $table = 'exercise_types';

    protected $fillable = [
        'name',
        'description',
    ];

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class);
    }
}
