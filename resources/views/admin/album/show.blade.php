@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Album Name:- {{ $album->name }}</h5>
            <form class="row g-3" action="{{route('picture.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="album_id" value="{{$album->id}}" >
                <input type="hidden" name="album_name" value="{{ $album->name }}" >
                <div class="col-12">
                    <label for="inputNanme4" class="form-label">Add Picture</label>
                    <input type="file" class="form-control" name="pictures[]" multiple>
                    <br>
                    @error('pictures')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-octagon me-1"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
