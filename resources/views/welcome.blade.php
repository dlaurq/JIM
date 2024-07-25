<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JIM</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased dark:bg-black dark:text-white flex items-center justify-center flex-col gap-5 h-screen">
        <a href="start-workout">Start Workout</a>

        <a href="create-workout">Create Workout</a>

        <section>
            <h2>Workouts log</h2>
            <ul>
                <li>W1</li>
                <li>W2</li>
                <li>W3</li>
            </ul>
        </section>
    </body>
</html>
