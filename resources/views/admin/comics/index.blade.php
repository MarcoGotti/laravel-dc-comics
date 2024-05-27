@extends('layouts.app')

@section('pageTitle')

@section('content')
    @foreach ($comics as $comic)
        <p>{{ $comic->title }}</p>
        <a href="{{ route('comics.show', $comic) }}">link</a>
    @endforeach
@endsection
