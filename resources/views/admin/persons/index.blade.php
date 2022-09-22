<?php

/** @var \App\Person[] $persons */

?>

@extends('layouts.app')

@section('title', 'Admin Panel: Persons')

@section('content')
    <h1>Admin Panel: Persons</h1>

    @if (session('person_removed'))
        <div class="alert alert-success">{{ session('person_removed') }}</div>
    @endif

    <button class="admin-panel__create-btn" data-href="{{ route('admin.persons.create') }}">Create person</button>

    <table>
        <thead>
            <th>id</th>
            <th></th>
            <th>name</th>
            <th>login</th>
            <th>email</th>
            <th>created_at</th>
            <th>updated_at</th>
        </thead>

        <tbody>
            @foreach($persons as $person)
                <tr>
                    <td>{{ $person->id }}</td>
                    <td>
                        <span><a href="{{ route('admin.persons.show', [$person->id]) }}">View</a></span>
                        <span><a href="{{ route('admin.persons.edit', [$person->id]) }}">Edit</a></span>
                        <span><a href="{{ route('admin.persons.delete', [$person->id]) }}" class="admin-panel__delete">Delete</a></span>
                    </td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->login }}</td>
                    <td>{{ $person->email }}</td>
                    <td>{{ $person->created_at }}</td>
                    <td>{{ $person->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection