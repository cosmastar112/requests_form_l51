<?php

/** @var \App\Request $request */
/** @var array $personsIds */

?>

@extends('layouts.app')

@section('title', 'Create request')

@section('content')
    <h1>Create request</h1>

    @include('request._form', ['personsIds' => $personsIds, 'isRequestPage' => true])
@endsection