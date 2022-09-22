<?php

/** @var \App\Person $person */

?>

@extends('layouts.app')

@section('title', 'Admin Panel: Show Person: ' . $person->login)

@section('content')
    <h1>Admin Panel: Show Person: {{ $person->login }}</h1>

    @if (session('person_updated'))
        <div class="alert alert-success">{{ session('person_updated') }}</div>
    @endif
    @if (session('person_created'))
        <div class="alert alert-success">{{ session('person_created') }}</div>
    @endif

    <button class="admin-panel__update-btn" data-href="{{ route('admin.persons.edit', [$person->id]) }}">Update person</button>

    <p>Id: {{ $person->id }}</p>
    <p>Name: {{ $person->name }}</p>
    <p>Login: {{ $person->login }}</p>
    <p>Email: {{ $person->email }}</p>
    <p>Created at: {{ $person->created_at }}</p>
    <p>Updated at: {{ $person->updated_at }}</p>
@endsection