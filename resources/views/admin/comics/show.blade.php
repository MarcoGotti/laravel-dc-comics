@extends('layouts.app')

@section('content')
    <h1 class="p-3 bg-dark text-white text-center">This .show page is <span class="text-primary">Admin</span> but it will be
        <span class="text-warning">Guests</span></h1>

    <div class="container py-5 text-center">
        <h2>
            {{ $comic->title }}
        </h2>

        <a class="btn btn-dark my-1" href="{{ route('comics.index') }}">Back to index</a>
    </div>
@endsection
