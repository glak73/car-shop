@extends('layouts.app')
@section('title', 'мне есть, что сказать')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{ Html::form('POST', route('car.store'))->acceptsFiles()->open() }}
    <div class="mb-3">
        {{ Html::label('Название модели', 'txtTitle')->for('txtName') }}
        {{ Html::text('model_name')->id('model_name')->class('form-control') }}
    </div>
    <div class="mb-3">
        {{ Html::label('Название категории', 'txtTitle')->for('txtName') }}
        {{ Html::text('category')->id('category')->class('form-control') }}
    </div>
    <div class="mb-3">
        {{ Html::label('цена', 'txtTitle')->for('txtName') }}
        {{ Html::number('price')->id('price')->class('form-control') }}
    </div>
    </div>
    <div class="mb-3">
        {{ Html::label('картинка автомобиля', 'txtBody')->for('car_avatar') }}
    {{ html()->file('car_avatar')->class('form-control')}}
    </div>
    {{ Html::submit('Добавить')->class('btn btn-primary') }}
    {{ Html::form()->close() }}
@endsection('content')
