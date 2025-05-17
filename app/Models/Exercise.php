<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exercise extends Model
{
    use HasFactory;

    protected $table = 'exercises';

    protected $fillable = [
        'name',
        'description',
        'video_url',
        'duration_minutes',
        'equipment_id',
        'type_id',
    ];

    protected $casts = [
        'duration_minutes' => 'integer',
        'equipment_id' => 'integer',
        'type_id' => 'integer',
    ];

    public function exerciseType()
    {
        return $this->hasOne(ExerciseType::class);
    }

    public function equipment()
    {
        return $this->hasOne(Equipment::class);
    }
}
