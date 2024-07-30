<section id="form-alerts">{!! $alert !!}</section>

<form hx-post="{{ url('/create-workout') }}" hx-target="#form-container" hx-swap="innerHTML">
    @csrf
    <fieldset>
        <label for="workout-name">Workout Name:</label>
        <input type="text" name="workout name" id="workout-name">
    </fieldset>
    <section id="exercise-list">
        @include('partials.exercise-template', ['exerciseCounter' => cache('exercise-counter')])
    </section>
    <button type="button" hx-get="/new-exercise-template" hx-target="#exercise-list" hx-swap="beforeend">Add Exercise</button>
    <br>
    <button type="submit">Save workout</button>
</form>
