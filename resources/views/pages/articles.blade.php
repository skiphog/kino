<?php
/**
 * @var \Illuminate\Database\Eloquent\Collection $articles
 * @var \App\Article $article
 */
?>

@extends('layout')

@section('title','Статьи про группу Кино')
@section('description','Статьи про группу Кино')

@section('content')
    @if($articles->isNotEmpty())
        @foreach($articles as $article)
            <article class="uk-article">
                <h3 class="uk-article-title">
                    <a class="uk-link-reset" href="{{ route('article',[$article->id]) }}">{{ $article->title }}</a>
                </h3>
                <p class="uk-article-meta">Опуликована: {{ $article->created_at->format('d-m-Y') }}</p>
                <p class="uk-text-lead">{{ $article->description }}</p>
                <p>{{ str_limit($article->text, 300) }}</p>
            </article>
        @endforeach

        {{ $articles->links('partials.paginate') }}
    @endif
@endsection