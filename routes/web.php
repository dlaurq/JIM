<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/start-workout', function () {
    return view('workout.start');
});

Route::get('/create-workout', function () {
    return view('workout.create');
});
