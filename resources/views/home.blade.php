@extends('layouts.app')

@section('pageTitle'){{-- per la Home page lascio il titolo della Repo/Folder  --}}

@section('content')
    <h1>HomePage</h1>
    <a href="{{ route('comics.index') }}">Admin</a>
@endsection
