@extends('layouts.app')

@section('pageTitle', 'Home Admin'){{-- per la Home page lascio il titolo della Repo/Folder  --}}

@section('content')
    {{-- <div class="container text-end">
        <a href="{{ route('comics.index') }}">Admin</a>
    </div> --}}


    <div class="container text-center py-5">
        <div class="row g-4">

            @forelse ($comics as $comic)
                <div class="col-3">
                    <div class="card bg-dark">

                        <a href="{{ route('comics.show', $comic) }}">
                            <img src="{{ $comic->cover_image }}" class="card-img-top p-2" alt="...">
                        </a>

                        <div class="card-body text-white fw-bold fs-5">
                            {{ $comic->title }}
                        </div>

                        <a class="text-end p-1 text-decoration-none text-warning"
                            href="{{ route('comics.show', $comic) }}">Read</a>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">!! NO RECORDS HERE !!</div>
            @endforelse
        </div>
    </div>

@endsection
