@extends('layout')

@section('title','Авторизация')
@section('description','Вход')

@section('content')

    {{ Form::open(['action' => 'Auth\LoginController@login','class' => 'uk-flex uk-flex-center']) }}
    <fieldset class="uk-fieldset">

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                {!! Form::email('email', null, ['class' => 'uk-input', 'required autofocus']) !!}
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                {{ Form::password('password',['class' => 'uk-input', 'required']) }}
            </div>
        </div>

        @if ($errors->has('email') || $errors->has('password'))
            <div class="uk-margin">
                <div class="uk-text-danger">Неверный логин или пароль</div>
            </div>
        @endif

        <div class="uk-margin">
            <label>{{ Form::checkbox('remember', null, true,['class' => 'uk-checkbox']) }} Запомнить меня</label>
        </div>

        <div class="uk-margin">
            {!! Form::button('Войти',['type' => 'submit', 'class' => 'uk-button uk-button-default uk-width-1-1']) !!}
        </div>
    </fieldset>
    {{ Form::close() }}

@endsection
