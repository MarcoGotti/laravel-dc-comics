@extends('layouts.admin')

@section('content')
    <h1 class="p-3 bg-dark text-white text-center"><span class="text-primary">Admin:</span> update {{ $comic->title }}</h1>
    <div class="container p-5">

        @include('partials.validateAlert')

        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="title" class="form-label">Comic title</label>
                <input type="text" class="form-control w-50 @error('title') is-invalid @enderror" name="title"
                    id="title" aria-describedby="titleHelper" placeholder="es. Dylan Dog"
                    value="{{ old('title', $comic->title) }}" required />
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <hr>

            <div class="d-flex gap-4 my-4">
                <div class="height_150 overflow-y-hidden">
                    <img width="200px" class="img-fluid" src="{{ $comic->cover_image }}" alt="image">
                </div>
                <div class="mb-3 w-100">
                    <label for="cover_image" class="form-label">Upload new image-url</label>
                    <input type="text" class="form-control w-50 @error('cover_image') is-invalid @enderror"
                        name="cover_image" id="cover_image" aria-describedby="ImageHelper"
                        placeholder="https://lorempicsum.com/myimage.png"
                        value="{{ old('cover_image', $comic->cover_image) }}" />
                    <small id="ImageHelper" class="form-text text-muted">Type a URL</small>

                    @error('cover_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <hr>

            <div class="mb-3">
                <label for="body" class="form-label"><i class="fa fa-audio-description"
                        aria-hidden="true"></i>Description</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="3"
                    required>{{ old('body', $comic->body) }}</textarea>

                @error('body')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <small id="ImageHelper" class="form-text text-muted">min. 20 max. 1000 characters </small>
            </div>

            <button type="submit" class="btn btn-warning border-black">Update</button>

        </form>

        <a class="btn btn-dark my-2" href="{{ route('comics.index') }}">Abort</a>
    </div>
@endsection
