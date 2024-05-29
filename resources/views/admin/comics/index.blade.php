@extends('layouts.app')

@section('pageTitle')

@section('content')
    <h1 class="p-3 bg-dark text-white text-center">Comics list</h1>
    <div class="container py-5">

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr class="border-bottom border-black">
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Publishing date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="">
                            <td>{{ $comic->id }}</td>
                            <td class="fw-bold">{{ $comic->title }}</td>
                            <td>{{ $comic->created_at }}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic) }}">View</a>
                                |
                                <a href="">Edit</a>
                                |
                                <a href="">Delete</a>
                                |
                            </td>
                        </tr>

                    @empty

                        <tr class="">
                            <td scope="row">NO RECORDS IN OUR DATABASE</td>
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
