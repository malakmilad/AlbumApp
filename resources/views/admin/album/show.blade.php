@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $album->name }}</h5>
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($pictures as $index => $picture)
                        <div class="carousel-item{{ $index === 0 ? ' active' : '' }}">
                            <img src="{{ asset($album->name . '/' . $picture->name) }}" class="d-block w-100" height="500">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
@endsection
