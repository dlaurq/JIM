<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkoutTemplateController extends Controller
{
    public function store(Request $request) {
        return view('partials.exercise-template');
    }
}
