@extends('layouts.admin')

@section('content')
    <h1 class="p-3 bg-dark text-white text-center"><span class="text-primary">Admin:</span> Insert a new comic in DB</h1>
    <div class="container p-5">

        @include('partials.validateAlert')

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Comic title</label>
                <input type="text" class="form-control w-50 @error('title') is-invalid @enderror" name="title"
                    id="title" aria-describedby="titleHelper" placeholder="es. Dylan Dog" value="{{ old('title') }}"
                    required />
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <hr>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover image</label>
                <input type="text" class="form-control w-50 @error('cover_image') is-invalid @enderror"
                    name="cover_image" id="cover_image" aria-describedby="ImageHelper"
                    placeholder="es. https://lorempicsum.com/myimage.png" value="{{ old('cover_image') }}" required />

                @error('cover_image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <small id="ImageHelper" class="form-text text-muted">Type a URL</small>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label"><i class="fa fa-audio-description"
                        aria-hidden="true"></i>Description</label>
                <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="3"
                    required>{{ old('body') }}</textarea>

                @error('body')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <small id="ImageHelper" class="form-text text-muted">min. 20 max. 1000 characters </small>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-warning border-black">Submit</button>
            </div>

        </form>

        <div class="text-end">
            <a class="btn btn-dark my-2" href="{{ route('comics.index') }}">Abort</a>
        </div>
    </div>
@endsection
