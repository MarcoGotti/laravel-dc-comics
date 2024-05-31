@extends('layouts.app')

@section('content')
    <h1 class="p-3 bg-dark text-white text-center"><span class="text-primary">Admin:</span> update {{ $comic->title }}</h1>
    <div class="container py-5">

        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="title" class="form-label">Comic title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="es. Dylan Dog" value="{{ $comic->title }}" />
                <small id="titleHelper" class="form-text text-muted">Type here a comic title</small>
            </div>

            <button type="submit" class="btn btn-dark">Update</button>

        </form>

        <a class="btn btn-dark my-1" href="{{ route('comics.index') }}">Abort</a>
    </div>
@endsection
