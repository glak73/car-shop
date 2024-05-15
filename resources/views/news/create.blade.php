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
    {{ Html::form('POST', route('news.store'))->acceptsFiles()->open() }}
    <div class="mb-3">
        {{ Html::label('Название', 'txtTitle')->for('txtName') }}
        {{ Html::text('title')->id('txtTitle')->class('form-control') }}
    </div>
    <div class="mb-3">
        {{ Html::label('текст ноности', 'txtBody')->for('txtBody') }}
        {{ Html::textarea('body')->id('txtBody')->class('form-control')->rows(3) }}
    </div>

    {{-- <div class="mb-3">
        {!! Captcha::img()  !!}
        <div>
            {{ Html::label('captcha', 'captcha')->for('captcha') }}
            <div><input name="captcha" class="form-control"></div>
        </div>
    </div> --}}
    </div>
    <div class="mb-3">
        {{ Html::label('иллюстрация новости', 'txtBody')->for('news_avatar') }}
    {{ html()->file('news_avatar')->class('form-control')}}
    </div>
    {{ Html::submit('Добавить')->class('btn btn-primary') }}
    {{ Html::form()->close() }}
@endsection('content')
