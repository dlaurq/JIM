<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class WorkoutTemplateController extends Controller
{


    public function store(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        Cache::add('exercise-counter', 0);
        Cache::increment('exercise-counter');
        $exerciseCounter = Cache::get('exercise-counter');

        return view('partials.exercise-template', ['exerciseCounter' => $exerciseCounter]);
    }
}
