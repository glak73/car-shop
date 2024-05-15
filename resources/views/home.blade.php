@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    {{ Html::p(html()->a(route('news.create'), 'добавить новость')) }}
                    @if (Auth::user()->is_admin)
                        {{ Html::p(html()->a(route('car.create'), 'добавить машину')) }}
                        {{ Html::p(html()->a(route('car.index'), 'просмотреть каталог автомобилей')) }}
                    @else
                    {{ Html::p(html()->a(route('car.index'), 'просмотреть каталог автомобилей')) }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
