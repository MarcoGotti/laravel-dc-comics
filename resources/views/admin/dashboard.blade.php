@extends('layouts.admin')

@section('pageTitle', 'Dashboard')

@section('content')

    <h1 class="p-3 bg-dark text-white text-center">
        <span class="text-primary">Admin:</span> Dashboard
    </h1>

    <div class="container p-5">

        <div class="row g-3">
            <div class="col-4">
                <div class="card border-primary" style="min-height: 200px">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Total Listed Comics</h5>
                        <h2 class="card-text text-center">{{ sizeof($comics) }}</h2>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-primary" style="min-height: 200px">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Total Listed Comics</h5>
                        <h2 class="card-text text-center">{{ sizeof($comics) }}</h2>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-primary" style="min-height: 200px">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Total Listed Comics</h5>
                        <h2 class="card-text text-center">{{ sizeof($comics) }}</>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card border-primary" style="min-height: 200px">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Listed Comics</h5>
                        <p class="card-text">
                            @forelse ($comics as $comic)
                                <div>{{ $comic->title }}</div>

                            @empty

                                <div>No Comics listed in out DataBase</div>
                            @endforelse
                        </p>
                        <a class="btn btn-sm btn-primary" href="{{ route('comics.index') }}">Comic-list</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-primary" style="min-height: 200px">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Listed Comics</h5>
                        <p class="card-text">
                            @forelse ($comics as $comic)
                                <div>{{ $comic->title }}</div>

                            @empty

                                <div>No Comics listed in out DataBase</div>
                            @endforelse
                        </p>
                        <a class="btn btn-sm btn-primary" href="{{ route('comics.index') }}">Comic-list</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-primary" style="min-height: 200px">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Listed Comics</h5>
                        <p class="card-text">
                            @forelse ($comics as $comic)
                                <div>{{ $comic->title }}</div>

                            @empty

                                <div>No Comics listed in out DataBase</div>
                            @endforelse
                        </p>
                        <a class="btn btn-sm btn-primary" href="{{ route('comics.index') }}">Comic-list</a>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
