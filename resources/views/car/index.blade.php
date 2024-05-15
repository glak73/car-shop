@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-primary">каталог автомобилей</h1>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="row">
                    @foreach ($cars as $car)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $car->model_name }}</h5>
                                    <p class="card-text">{{ $car->category }}</p>
                                    <p class="card-text">{{ $car->price }}</p>
                                    <img src="{{ asset('storage/' . $car->path_to_file) }}" alt="News Image" width="200px"
                                        height="200px">
                                    {{-- <a href="{{ route('news.show', $news->id) }}" class="btn btn-primary">Просмотреть</a> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
