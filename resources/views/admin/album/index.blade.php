@extends('admin.layouts.app')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Table with stripped rows</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($albums as $album)
                        <tr>
                            <th scope="row">{{ $album->id }}</th>
                            <td>{{ $album->name }}</td>
                            <td>
                                <a href="{{ route('album.details', $album->id) }}">
                                    <i class="bi bi-eye-fill"></i>
                                </a>
                                <a href="{{ route('album.show', $album->id) }}">
                                    <i class="bi bi-patch-plus-fill"></i>
                                </a>
                                <a href="{{ route('album.edit', $album->id) }}">
                                    <i class="bi bi-pen"></i>
                                </a>
                                <a href="{{ route('album.destroy', $album->id) }}">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
