@php
//    dd(request()->is("name/*"));
//    dd(request()->url());
//    dd(request()->fullUrl());
@endphp


<form action="{{ route("test-post") }}?name=code reader" method="post">
    @csrf

    <label for="fname"
        @if(request()->is("name"))
            style="color: red"
        @endif
    >First name:</label><br>
    <input type="text" id="fname" name="fname" >

    @error('fname')
        {{ $message }}
    @enderror
    <br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname">

    <button type="submit">Submit</button>
</form>


@if(request()->routeIs("name"))
    {{ "Hey you are in a route name" }}
@endif

@if(request()->routeIs("name-test"))
    {{ "Route name-test " }}
@endif
