<?php

/** @var \App\Person $person */

?>

@extends('layouts.app')

@section('title', 'Admin Panel: Create Person')

@section('content')
    <h1>Admin Panel: Create Person</h1>

    @include('admin.persons._form', ['route' => ['admin.persons.store']])
@endsection