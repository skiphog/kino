@extends('admin.layout')

@section('title', 'Добавить статью')

@section('content')

    @include('errors.list')

    {{ Form::open(['route' => 'articles.store']) }}
        @include('admin.articles.form', ['nameButton' => 'Добавить'])
    {{ Form::close() }}

@endsection