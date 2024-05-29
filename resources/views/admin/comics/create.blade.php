@extends('layouts.app')

@section('content')
    <h1 class="p-3 bg-dark text-white text-center">Insert a new comic in DB</h1>
    <div class="container py-5">

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Comic title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="es. Dylan Dog" />
                <small id="titleHelper" class="form-text text-muted">Type here a comic title</small>
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>

        </form>

        <a class="btn btn-dark my-1" href="{{ route('comics.index') }}">Back to index</a>
    </div>
@endsection
