@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Album</h5>
            <form class="row g-3" action="{{ route('album.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Album Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="enter your album name">
                    <br>
                    @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-octagon me-1"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Album Picture</label>
                    <input type="file" class="form-control" name="pictures[]" multiple>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
