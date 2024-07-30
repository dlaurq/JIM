<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JIM</title>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased dark:bg-black dark:text-white">
        <main class="flex items-center justify-between flex-col gap-5 min-h-screen py-20">

            <h1 class="text-5xl text-amber-500 font-bold ">JIM</h1>

            <section class="flex flex-col gap-10">
                <a class="bg-amber-500 text-black text-2xl font-semibold px-4 py-2 rounded-lg text-center" href="start-workout">Start Workout</a>
                <a class="border-amber-500 border-2 text-2xl font-semibold px-4 py-2 rounded-lg text-center" href="create-workout">Create Workout</a>
                <a class="border-b-2 text-xl font-thin text-center w-fit mx-auto relative bottom-4" href="history">History</a>
            </section>

            <section class="flex flex-col gap-5">
                <h2 class="text-xl font-semibold text-center">Last Workouts</h2>
                <ul class="flex gap-3">
                    <li class="bg-white rounded-lg text-black text-lg font-semibold p-2 text-center">
                        <h3>Push</h3>
                        <time class="font-thin"> 5 Feb 2024</time>
                    </li>
                    <li class="bg-white rounded-lg text-black text-lg font-semibold p-2 text-center">
                        <h3>Push</h3>
                        <time class="font-thin"> 5 Feb 2024</time>
                    </li>
                    <li class="bg-white rounded-lg text-black text-lg font-semibold p-2 text-center">
                        <h3>Push</h3>
                        <time class="font-thin"> 5 Feb 2024</time>
                    </li>
                </ul>
            </section>
        </main>
    </body>
</html>
