@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-primary">врум врум)0)</h1>
            <div class="col-md-12">
                <p class="text-center">Добро пожаловать на наш сайт - ваш надежный источник информации о мире автомобилей Здесь вы найдете самые свежие новости и обновления от ведущих автопроизводителей, а также подробные обзоры новых моделей. Наш каталог машин предлагает широкий выбор автомобилей различных марок и годов выпуска, позволяя вам сравнить модели и выбрать идеальный вариант для себя. Не пропустите возможность узнать о последних инновациях в автомобильной индустрии и ознакомиться с новинками, которые ждут вас на дорогах.</p>

            </div>
            </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h2 class="text-center text-primary">Последние новости</h2>
            <div class="row">
                @foreach($latestNews as $news)
                    <div class="col-md-6">
                        <div class="card d-flex flex-column" style="height: 100%; max-height: 400px;">
                            <div class="card-body overflow-auto">
                                <h5 class="card-title">{{ $news->title }}</h5>
                                <p class="card-text">{{ $news->description }}</p>
                                <img src="{{ asset('storage/'. $news->path_to_file) }}" alt="News Image" width="200px" height="200px">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-3">
                <a href="{{ route('news.index') }}" class="btn btn-warning">Просмотреть все</a>
            </div>
        </div>
    </div>
</div>
@endsection
