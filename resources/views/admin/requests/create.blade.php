<?php

/** @var \App\Request $request */
/** @var array $personsIds */

?>

@extends('layouts.app')

@section('title', 'Admin Panel: Create Request: ' . $request->id)

@section('content')
    <h1>Admin Panel: Create Request: {{ $request->id }}</h1>

    @include('admin.requests._form', ['personsIds' => $personsIds, 'route' => ['admin.requests']])
@endsection