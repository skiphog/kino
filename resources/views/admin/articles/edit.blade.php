@extends('admin.layout')

@section('title', 'Редактировать статью')

@section('content')

    @include('partials.errors')
    @include('partials.flash')

    {{ Form::model($article,['method' => 'PUT','route' => ['articles.update', $article->id]]) }}
        @include('admin.articles.form',['nameButton' => 'Сохранить'])
    {{ Form::close() }}

@endsection