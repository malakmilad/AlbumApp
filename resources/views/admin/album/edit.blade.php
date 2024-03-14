@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Update Album</h5>
            <form class="row g-3" action="{{ route('album.update', $album->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Album Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $album->name }}">
                    <br>
                    @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-octagon me-1"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Album pictures</label>
                    <div class="d-flex justify-content-evently">
                        @foreach ($pictures as $picture)
                            <div class="mx-1">
                                <img src="{{ asset('pictures/' . $picture->name) }}" width="100" height="100">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
