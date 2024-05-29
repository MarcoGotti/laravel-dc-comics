@extends('layouts.app')

@section('pageTitle', 'Home Admin'){{-- per la Home page lascio il titolo della Repo/Folder  --}}

@section('content')

    <h1 class="p-3 bg-dark text-white text-center">Home Page</h1>

    <div class="container text-end">
        <a href="{{ route('comics.index') }}">Admin</a>
    </div>

@endsection
