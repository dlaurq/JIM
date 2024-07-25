<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JIM</title>
        @vite('resources/css/app.css')
        @vite(['resources/js/app.js'])
    </head>
    <body class="antialiased flex items-center justify-center flex-col gap-5 h-screen">
        <form>
            <fieldset>
                <label for="workout-name">Workout Name:</label>
                <input type="text" name="Workout Name" id="workout-name">
            </fieldset>

            <div id="exercise-list"></div>

            <button type="button" hx-get="/new-exercise-template" hx-target="#exercise-list" hx-swap="beforeend">Add Exercise</button>
            <br>
            <button type="submit">Save workout</button>
        </form>
    </body>
</html>
