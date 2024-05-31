@extends('layouts.admin')

@section('pageTitle', 'Admin-index')

@section('content')
    <h1 class="p-3 bg-dark text-white text-center">
        <span class="text-primary">Admin:</span> Comics list
    </h1>

    <div class="container py-3">

        <div class="text-end">
            <a class="btn btn-warning border-black" href="{{ route('home') }}">Back to HomePage</a>
        </div>

        <div class="table-responsive py-3">
            <table class="table table-primary">
                <thead>
                    <tr class="border-bottom border-black">
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Publishing date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @forelse ($comics as $comic)
                        <tr class="">
                            <td>{{ $comic->id }}</td>
                            <td>
                                <div class="height_60 overflow-y-hidden">
                                    <img width="70" src="{{ $comic->cover_image }}" alt="">
                                </div>
                            </td>
                            <td class="fw-bold">{{ $comic->title }}</td>
                            <td>{{ $comic->created_at }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic) }}">View</a>
                                |
                                <a href="{{ route('comics.edit', $comic) }}">Edit</a>
                                |
                                <a href="">Delete</a>
                                |
                            </td>
                        </tr>

                    @empty

                        <tr class="">
                            <td colspan="5">NO RECORDS IN OUR DATABASE</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="text-end">
            <a class="btn btn-dark" href="{{ route('comics.create') }}">Add Comic</a>
        </div>
    </div>



    {{-- @foreach ($comics as $comic)
        <p>{{ $comic->id }} {{ $comic->title }}</p>
        <a href="{{ route('comics.show', $comic) }}">link</a>
    @endforeach --}}
@endsection
