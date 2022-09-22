<?php

/** @var \App\Person $person */

?>

@extends('layouts.app')

@section('title', 'Admin Panel: Update Person: ' . $person->login)

@section('content')
    <h1>Admin Panel: Update Person: {{ $person->login }}</h1>

    @include('admin.persons._form', ['route' => ['admin.persons.update', 'personById' => $person->id]])
@endsection