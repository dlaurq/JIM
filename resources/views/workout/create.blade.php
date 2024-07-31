@extends('layouts.app')
@section('content')
    <main class="flex items-center justify-between flex-col gap-5 min-h-screen py-20">
        <h2 class="text-4xl text-amber-500 font-bold text-center">Create Workout</h2>
        <section id="form-container">
            @include('workout.form', ['alert' => ''])
        </section>
        <a class="border-b-2 mt-12" href="/">Back to home</a>
    </main>
@endsection
