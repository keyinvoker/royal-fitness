<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class);
    }
}
