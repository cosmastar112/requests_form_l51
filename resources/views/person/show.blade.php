<?php

/** @var \App\Person $person */
/** @var \App\Request $request */
/** @var array $personsIds */

?>

@extends('layouts.app')

@section('title', 'Person: ' . $person->name)

@section('content')
    <h1>Person</h1>

    @include('person._info')

    <h2>Create request</h2>
    @include('request._form', ['request' => $request, 'personsIds' => $personsIds])
@endsection
