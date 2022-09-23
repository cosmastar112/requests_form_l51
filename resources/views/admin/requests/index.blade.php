<?php

/** @var \App\Request[] $requests */

?>

@extends('layouts.app')

@section('title', 'Admin Panel: Request')

@section('content')
    <h1>Admin Panel: Request</h1>

    @if (session('request_removed'))
        <div class="alert alert-success">{{ session('request_removed') }}</div>
    @endif

    <button class="admin-panel__create-btn" data-href="{{ route('admin.requests.create') }}">Create request</button>

    <table>
        <thead>
        <th>id</th>
        <th></th>
        <th>per_id</th>
        <th>from</th>
        <th>body</th>
        <th>created_at</th>
        <th>updated_at</th>
        </thead>

        <tbody>
        @foreach($requests as $request)
            <tr>
                <td>{{ $request->id }}</td>
                <td>
                    <span><a href="{{ route('admin.requests.show', [$request->id]) }}">View</a></span>
                    <span><a href="{{ route('admin.requests.edit', [$request->id]) }}">Edit</a></span>
                    <span><a href="{{ route('admin.requests.delete', [$request->id]) }}" class="admin-panel__delete">Delete</a></span>
                </td>
                <td>{{ $request->per_id }}</td>
                <td>{{ $request->from }}</td>
                <td>{{ $request->body }}</td>
                <td>{{ $request->created_at }}</td>
                <td>{{ $request->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection