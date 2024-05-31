@extends('layouts.admin')

@section('content')
    <h1 class="p-3 bg-dark text-white text-center"><span class="text-primary">Admin:</span> Insert a new comic in DB</h1>
    <div class="container p-5">

        <div class="text-end">
            <a class="btn btn-warning border-black" href="{{ route('home') }}">Back to HomePage</a>
        </div>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Comic title</label>
                <input type="text" class="form-control w-50" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="es. Dylan Dog" />
                <small id="titleHelper" class="form-text text-muted">Type here a comic title</small>
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover image</label>
                <input type="text" class="form-control w-50" name="cover_image" id="cover_image"
                    aria-describedby="ImageHelper" placeholder="es. https://lorempicsum.com/myimage.png" />
                <small id="ImageHelper" class="form-text text-muted">Type the cover image url</small>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label"><i class="fa fa-audio-description"
                        aria-hidden="true"></i>Description</label>
                <textarea class="form-control" name="body" id="body" rows="3"></textarea>
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
