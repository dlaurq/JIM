<section class="flex flex-col gap-3 border-t-2 border-neutral-300 pt-4 mt-8 first:mt-0">
    <h3 class="text-lg font-semibold text-center text-neutral-300">Exercise {{$exerciseCounter}}</h3>
    <fieldset class="flex flex-col gap-1 text-neutral-300">
        <label class="font-medium" for="exercise-name-{{$exerciseCounter}}">Exercise Name</label>
        <input class="rounded-lg bg-neutral-300 text-black required:after:content-['*']" required type="text" name="exercise name {{$exerciseCounter}}" id="exercise-name-{{$exerciseCounter}}">
    </fieldset>

    <fieldset class="flex flex-col gap-1 text-neutral-300">
        <label class="font-medium" for="no-sets-{{$exerciseCounter}}">Number of sets</label>
        <input class="rounded-lg bg-neutral-300 text-black" required type="text" name="number of sets {{$exerciseCounter}}" id="no-sets-{{$exerciseCounter}}">
    </fieldset>

    <fieldset class="flex flex-col gap-1 text-neutral-300">
        <label class="font-medium" for=rep-range-{{$exerciseCounter}}">Rep range</label>
        <input class="rounded-lg bg-neutral-300 text-black" required type="text" name="rep range {{$exerciseCounter}}" id=rep-range-{{$exerciseCounter}}">
    </fieldset>

    <fieldset class="flex flex-col gap-1 text-neutral-300">
        <label class="font-medium" for="pause-{{$exerciseCounter}}">Pause (min)</label>
        <input class="rounded-lg bg-neutral-300 text-black" type="text" name="pause {{$exerciseCounter}}" id="pause-{{$exerciseCounter}}">
    </fieldset>

    <fieldset class="flex flex-col gap-1 text-neutral-300">
        <label class="font-medium" for="rir-{{$exerciseCounter}}">RIR</label>
        <input class="rounded-lg bg-neutral-300 text-black" type="text" name="rir {{$exerciseCounter}}" id="rir-{{$exerciseCounter}}">
    </fieldset>

    <fieldset class="flex flex-col gap-1 text-neutral-300">
        <label class="font-medium" for="tempo-{{$exerciseCounter}}">Tempo</label>
        <input class="rounded-lg bg-neutral-300 text-black" type="text" name="tempo {{$exerciseCounter}}" id="tempo-{{$exerciseCounter}}">
    </fieldset>

    <fieldset class="flex flex-col gap-1 text-neutral-300">
        <label class="font-medium" for="notes-{{$exerciseCounter}}">Notes</label>
        <input class="rounded-lg bg-neutral-300 text-black" type="text" name="notes {{$exerciseCounter}}" id="notes-{{$exerciseCounter}}">
    </fieldset>

    <input type="hidden" name="counter" value="{{$exerciseCounter}}">
</section>
