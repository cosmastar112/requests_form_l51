<?php

/** @var \App\Person[] $persons */

?>

<h1>Persons</h1>

@if (session('request_created'))
    <div class="alert alert-success">{{ session('request_created') }}</div>
@endif

<ul>
    @foreach($persons as $person)
        <li>
            <a href="/{{ $person->login }}">{{ $person->name }} ({{ $person->login }})</a>
        </li>
    @endforeach
</ul>