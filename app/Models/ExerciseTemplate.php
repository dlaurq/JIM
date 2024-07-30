<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseTemplate extends Model
{
    use HasFactory;

    protected $fillable   = ['name', 'number_of_sets', 'rep_range', 'pause', 'rir', 'tempo', 'notes', 'workout_template_id'];

    public function workoutTemplate()
    {
        return $this->belongsTo(WorkoutTemplate::class);
    }
}
