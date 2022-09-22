@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <h1>Admin Panel</h1>

    <a href="{{ route('admin.persons') }}">Persons</a>
    <a href="{{ route('admin_requests') }}">Requests</a>
@endsection