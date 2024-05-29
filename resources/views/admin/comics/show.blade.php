@extends('layouts.app')

@section('content')
    <div class="container py-5 text-center">
        <h2>
            {{ $comic->title }}
        </h2>

        <a class="btn btn-dark my-1" href="{{ route('comics.index') }}">Back to index</a>
    </div>
@endsection
