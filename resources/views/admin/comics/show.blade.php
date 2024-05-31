@extends('layouts.app')

@section('content')
    {{-- <h1 class="p-3 bg-dark text-white text-center">This .show page is <span class="text-primary">Admin</span> but it will be
        <span class="text-warning">Guests</span>
    </h1> --}}

    <div class="container py-5 text-center">

        <div class="bg-dark d-flex p-5">
            <div class="col-4">
                <img height="400px" src="{{ $comic->cover_image }}" alt="https://picsum.photos/id/96/200/300">
            </div>

            <div class="col-8 text-white d-flex flex-column">
                <div class="text-uppercase fw-bold fs-5 text-warning pb-3">{{ $comic->title }}</div>
                <div>{{ $comic->body }}</div>

                <div class="d-flex mt-auto">
                    <div class="col-2">
                        <img height="150px" src="{{ $comic->cover_image }}" alt="https://picsum.photos/id/96/200/300">
                        <div>ch. 1</div>
                    </div>
                    <div class="col-2">
                        <img height="150px" src="{{ $comic->cover_image }}" alt="https://picsum.photos/id/96/200/300">
                        <div>ch. 2</div>
                    </div>
                    <div class="col-2">
                        <img height="150px" src="{{ $comic->cover_image }}" alt="https://picsum.photos/id/96/200/300">
                        <div>ch. 3</div>
                    </div>
                    <div class="col-2">
                        <img height="150px" src="{{ $comic->cover_image }}" alt="https://picsum.photos/id/96/200/300">
                        <div>ch. 4</div>
                    </div>
                    <div class="col-2">
                        <img height="150px" src="{{ $comic->cover_image }}" alt="https://picsum.photos/id/96/200/300">
                        <div>ch. 5</div>
                    </div>
                    <div class="col-2">
                        <img height="150px" src="{{ $comic->cover_image }}" alt="https://picsum.photos/id/96/200/300">
                        <div>ch. 6</div>
                    </div>

                </div>
            </div>
        </div>


    </div>



    {{-- <a class="btn btn-dark my-1" href="{{ route('comics.index') }}">Back to index</a> --}}
    </div>
@endsection
