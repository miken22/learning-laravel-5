@extends('app')

@section('content')

<h1>About</h1>

@if (count($people))
<h3>Something here: </h3>

<ul>
    @foreach($people as $person)
        <li>{{ $person }}</li>
    @endforeach

</ul>
@endif

<p> Lorem ipsum </p>

@stop