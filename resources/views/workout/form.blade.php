<section id="form-alerts">{!! $alert !!}</section>

<form class="flex flex-col gap-8" hx-post="{{ url('/create-workout') }}" hx-target="#form-container" hx-swap="innerHTML">
    @csrf
    <fieldset class="flex flex-col gap-1 text-neutral-300">
        <label class="font-medium" for="workout-name">Workout Name</label>
        <input class="rounded-lg bg-neutral-300 text-black" required type="text" name="workout name" id="workout-name">
    </fieldset>
    <section id="exercise-list">
        @include('partials.exercise-template', ['exerciseCounter' => cache('exercise-counter')])
    </section>

    <section class="flex flex-col items-center gap-6">
        <button class="border-amber-500 border-2 text-xl font-semibold py-3 rounded-lg text-center w-full" type="button" hx-get="/new-exercise-template" hx-target="#exercise-list" hx-swap="beforeend">Add Exercise +</button>
        <button class="bg-amber-500 text-black text-xl font-semibold py-3 rounded-lg text-center w-full" type="submit">Save workout</button>
    </section>

</form>
