<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/start-workout', function () {
    return view('workout.start');
});

Route::get('/new-exercise-template', [\App\Http\Controllers\WorkoutTemplateController::class, 'getExerciseTemplate']);

Route::get('/create-workout', [\App\Http\Controllers\WorkoutTemplateController::class, 'get']);
Route::post('/create-workout', [\App\Http\Controllers\WorkoutTemplateController::class, 'store']);
