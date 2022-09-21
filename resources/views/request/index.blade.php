<?php

/** @var \App\Request $request */

?>

@extends('layouts.app')

@section('title', 'Create request')

@section('content')
    <h1>Create request</h1>

    @include('request._form', ['isRequestPage' => true])
@endsection