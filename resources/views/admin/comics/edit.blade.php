@extends('layouts.admin')

@section('content')
    <h1 class="p-3 bg-dark text-white text-center"><span class="text-primary">Admin:</span> update {{ $comic->title }}</h1>
    <div class="container py-5">

        <div class="text-end">
            <a class="btn btn-warning border-black" href="{{ route('home') }}">Back to HomePage</a>
        </div>

        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="title" class="form-label">Comic title</label>
                <input type="text" class="form-control w-50" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="es. Dylan Dog" value="{{ $comic->title }}" />
                <small id="titleHelper" class="form-text text-muted">Type here a comic title</small>
            </div>

            <hr>

            <div class="d-flex gap-4 my-4">
                <div class="height_150 overflow-y-hidden">
                    <img width="200px" class="img-fluid" src="{{ $comic->cover_image }}" alt="image">
                </div>
                <div class="mb-3 w-100">
                    <label for="cover_image" class="form-label">Upload new image-url</label>
                    <input type="text" class="form-control w-50" name="cover_image" id="cover_image"
                        aria-describedby="ImageHelper" placeholder="https://lorempicsum.com/myimage.png"
                        value="{{ $comic->cover_image }}" />
                    <small id="ImageHelper" class="form-text text-muted">Type the cover image url</small>
                </div>
            </div>

            <hr>

            <div class="mb-3">
                <label for="body" class="form-label">Description</label>
                <textarea class="form-control" name="body" id="body" rows="3">{{ $comic->body }}</textarea>
            </div>

            <button type="submit" class="btn btn-warning border-black">Update</button>

        </form>

        <a class="btn btn-dark my-2" href="{{ route('comics.index') }}">Abort</a>
    </div>
@endsection
