@extends('layouts.app')
@section('content')
    <main class="flex items-center justify-between flex-col gap-5 min-h-screen py-20">
        <h2 class="text-4xl text-amber-500 font-bold text-center">Start Your <br>Workout</h2>

        <section class="flex flex-col gap-10 items-center relative">
            <a class="text-xl font-medium text-blue-500 w-fit" href="select-template">Select a Template</a>

            <div class="absolute px-3 top-[calc(50%-13px)] bg-black ">OR</div>
            <hr class="w-full">

            <a class="text-xl font-medium text-blue-500 w-fit" href="start">Start From Scratch</a>
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
@endsection
