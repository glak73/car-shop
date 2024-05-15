@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-primary">Все новости</h1>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center text-primary">Последние новости</h2>
                <div class="row">
                    @foreach ($news as $news)
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $news->title }}</h5>
                                    <p class="card-text">{{ $news->description }}</p>
                                    <img src="{{ asset('storage/' . $news->path_to_file) }}" alt="News Image" width="200px"
                                        height="200px">
                                    @if (Auth::user()->is_admin)
                                    {{ html()->form('DELETE', route('news.destroy', ['news' => $news->id]))->open() }}
                                    {{ html()->submit('Удалить', ['class' => 'btn btn-danger']) }}
                                    {{ html()->form()->close() }}
                                    {{-- <a href="{{route('news.destroy', ['news' => $news->id])}}"> удалить новость</a> --}}
                                    {{-- {{ html()->a()->href(route('news.destroy', ['news' => $news->id]))->text('Удалить новость...') }} --}}
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
