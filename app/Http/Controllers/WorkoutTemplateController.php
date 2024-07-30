<?php

namespace App\Http\Controllers;

use App\Models\ExerciseTemplate;
use App\Models\WorkoutTemplate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class WorkoutTemplateController extends Controller
{

    /*
     * Return the Create Workout Page
     */
    public function get(Request $request): View {
        Cache::forget('exercise-counter');
        return view('workout.create');
    }

    /*
     * Return a new Exercise Template
     */
    public function getExerciseTemplate(Request $request): View {
        Cache::add('exercise-counter', 0);
        Cache::increment('exercise-counter');
        return view('partials.exercise-template', ['exerciseCounter' => Cache::get('exercise-counter')]);
    }

    /*
     * Create workout template with all the exercises and redirect the user to the create workout page with a message
     * THE FUNCTION NEED A BETTER NAME
     */
    public function store(Request $request): RedirectResponse {
        $data = $request->all();
        $workoutTemplate = $this->createWorkoutTemplate($data['workout_name']);
        $data['workout_template_id'] = $workoutTemplate->getKey();
        $exercises = $this->normalizeExercisesData($data);
        foreach ($exercises as $exercise) {
            $this->createExerciseTemplate($exercise);
        }
        return redirect('/create-workout');
    }

    private function createWorkoutTemplate(string $name): WorkoutTemplate {
        $workoutTemplate = new WorkoutTemplate();
        $workoutTemplate->fill(['name' => $name]);
        $workoutTemplate->save();
        return $workoutTemplate;
    }

    private function createExerciseTemplate(array $fields): void {
        $exercise_template = new ExerciseTemplate();
        $exercise_template->fill($fields);
        $exercise_template->save();
    }

    private function normalizeExercisesData(array $data):array {
        $exerciseTemplate = ['number_of_sets', 'rep_range', 'pause', 'rir', 'tempo', 'notes'];
        $counter = $data['counter'];
        $exercises = [];
        for ($i = 1; $i <= $counter; $i++) {
            $exercise['name'] = $data['exercise_name' . '_' . $i];
            $exercise['workout_template_id'] = $data['workout_template_id'];
            foreach ($exerciseTemplate as $item) {
                $exercise[$item] = $data[$item . '_' . $i];
            }
            $exercises[] = $exercise;
        }
        return $exercises;
    }
}
