<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JIM</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased dark:bg-black dark:text-white flex items-center justify-center flex-col gap-5 h-screen">
        <ul>
            <li><a href="/workout/{id}">Workout 1</a></li>
            <li><a href="/workout/{id}">Workout 2</a></li>
            <li><a href="/workout/{id}">Workout 3</a></li>
            <li><a href="/workout/{id}">Workout 4</a></li>
        </ul>
    </body>
</html>
