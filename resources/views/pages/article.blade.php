<?php
/**
 * @var \App\Article $article
 */
?>

@extends('layout')

@section('title', $article->title)
@section('description', $article->title)

@section('content')

    <article class="uk-article">
        <h1 class="uk-article-title">{{ $article->title }}</h1>
        <p class="uk-article-meta">Опуликована: {{ $article->created_at->format('d-m-Y') }}</p>
        <p class="uk-text-lead">{{ $article->description }}</p>
        <p>{!!  nl2br($article->text)  !!}</p>
        <div>
            <a class="uk-button uk-button-text" href="{{ url('articles') }}">Все статьи</a>
        </div>
    </article>

@endsection