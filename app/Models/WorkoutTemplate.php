<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutTemplate extends Model
{
    use HasFactory;

    public function excerciseTemplates()
    {
        return $this->hasMany(ExerciseTemplate::class);
    }
}
