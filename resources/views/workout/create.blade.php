<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JIM</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased flex items-center justify-center flex-col gap-5 h-screen">
        <form action="">
            <fieldset>
                <label for="workout-name">Workout Name:</label>
                <input type="text" name="Workout Name" id="workout-name">
            </fieldset>

            <fieldset>
                <fieldset>
                    <label for="exercise-name">Exercise Name:</label>
                    <input type="text" name="Exercise Name" id="exercise-name">
                </fieldset>

                <fieldset>
                    <label for="sets-no">Number of sets:</label>
                    <input type="number" name="Number of sets" id="sets-no">
                </fieldset>

                <fieldset>
                    <label for=rep-range">Rep range:</label>
                    <input type="text" name="Rep range" id=rep-range">
                </fieldset>

                <fieldset>
                    <label for="pause">Pause (min):</label>
                    <input type="text" name="Pause (min)" id="pause">
                </fieldset>

                <fieldset>
                    <label for="rir">RIR:</label>
                    <input type="text" name="RIR" id="rir">
                </fieldset>

                <fieldset>
                    <label for="tempo">Tempo:</label>
                    <input type="text" name="Tempo" id="tempo">
                </fieldset>
            </fieldset>

            <button>Add Exercise</button>
            <br>
            <button>Save workout</button>
        </form>
    </body>
</html>
