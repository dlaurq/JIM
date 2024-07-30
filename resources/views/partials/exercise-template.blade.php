<fieldset>
    <legend>Exercise {{$exerciseCounter}} asd</legend>
    <fieldset>
        <label for="exercise-name-{{$exerciseCounter}}">Exercise Name:</label>
        <input type="text" name="exercise name {{$exerciseCounter}}" id="exercise-name-{{$exerciseCounter}}">
    </fieldset>

    <fieldset>
        <label for="no-sets-{{$exerciseCounter}}">Number of sets:</label>
        <input type="number" name="number of sets {{$exerciseCounter}}" id="no-sets-{{$exerciseCounter}}">
    </fieldset>

    <fieldset>
        <label for=rep-range-{{$exerciseCounter}}">Rep range:</label>
        <input type="text" name="rep range {{$exerciseCounter}}" id=rep-range-{{$exerciseCounter}}">
    </fieldset>

    <fieldset>
        <label for="pause-{{$exerciseCounter}}">Pause (min):</label>
        <input type="text" name="pause {{$exerciseCounter}}" id="pause-{{$exerciseCounter}}">
    </fieldset>

    <fieldset>
        <label for="rir-{{$exerciseCounter}}">RIR:</label>
        <input type="text" name="rir {{$exerciseCounter}}" id="rir-{{$exerciseCounter}}">
    </fieldset>

    <fieldset>
        <label for="tempo-{{$exerciseCounter}}">Tempo:</label>
        <input type="text" name="tempo {{$exerciseCounter}}" id="tempo-{{$exerciseCounter}}">
    </fieldset>

    <fieldset>
        <label for="notes-{{$exerciseCounter}}">Notes:</label>
        <input type="text" name="notes {{$exerciseCounter}}" id="notes-{{$exerciseCounter}}">
    </fieldset>

    <input type="hidden" name="counter" value="{{$exerciseCounter}}">
</fieldset>
