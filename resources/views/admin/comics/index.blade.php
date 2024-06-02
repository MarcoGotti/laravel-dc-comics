@extends('layouts.admin')

@section('pageTitle', 'Admin-index')

@section('content')
    <h1 class="p-3 bg-dark text-white text-center">
        <span class="text-primary">Admin:</span> Comics list
    </h1>

    <div class="container p-5">

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
                                <a class="btn btn-primary btn-sm" href="{{ route('comics.show', $comic) }}">View</a>

                                <a class="btn btn-secondary btn-sm" href="{{ route('comics.edit', $comic) }}">Edit</a>
                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $comic->id }}">
                                    Delete
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitle-{{ $comic->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitle-{{ $comic->id }}">
                                                    Delete <strong>{{ $comic->title }}</strong>
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    data-bs-dismiss="modal">
                                                    No
                                                </button>

                                                <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="btn btn-danger btn-sm" type="submit">
                                                        Yes, delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Optional: Place to the bottom of scripts -->


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

        <div class="text-end pb-3">
            <a class="btn btn-dark" href="{{ route('comics.create') }}">Add Comic</a>
        </div>

        {{ $comics->links('pagination::bootstrap-5') }}
    </div>



    {{-- @foreach ($comics as $comic)
        <p>{{ $comic->id }} {{ $comic->title }}</p>
        <a href="{{ route('comics.show', $comic) }}">link</a>
    @endforeach --}}
@endsection
