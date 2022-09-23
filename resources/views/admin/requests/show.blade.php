<?php

/** @var \App\Request $request */

?>

@extends('layouts.app')

@section('title', 'Admin Panel: Show Request: ' . $request->id)

@section('content')
    <h1>Admin Panel: Show Request: {{ $request->id }}</h1>

    @if (session('request_updated'))
        <div class="alert alert-success">{{ session('request_updated') }}</div>
    @endif
    @if (session('request_created'))
        <div class="alert alert-success">{{ session('request_created') }}</div>
    @endif

    <button class="admin-panel__update-btn" data-href="{{ route('admin.requests.edit', [$request->id]) }}">Update request</button>

    <p>Id: {{ $request->id }}</p>
    <p>PerId: {{ $request->per_id }}</p>
    <p>From: {{ $request->from }}</p>
    <p>Body: {{ $request->body }}</p>
    <p>Created at: {{ $request->created_at }}</p>
    <p>Updated at: {{ $request->updated_at }}</p>
@endsection