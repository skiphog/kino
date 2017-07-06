<?php
/**
 * @var \Illuminate\Database\Eloquent\Collection $articles
 * @var \App\Article $article
 */
?>
@extends('admin.layout')

@section('title', 'Управление статьями')
@section('description', 'Управление статьями')

@section('content')

    @include('partials.flash')

    <div class="uk-flex uk-flex-center">
        <a href="{{ route('articles.create') }}"
                class="uk-button uk-button-secondary uk-margin-small-bottom">Добавить статью</a>
    </div>

    @if($articles->isNotEmpty())
        <table class="uk-table uk-table-divider uk-table-middle">
            <thead>
            <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Дата</th>
                <th><span uk-icon="icon: settings"></span></th>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td class="uk-text-bold">{{ $article->title }}</td>
                    <td>{{ $article->description }}</td>
                    <td>{{ $article->created_at }}</td>
                    <td>
                        <div class="uk-inline">
                            <a href="#" class="uk-icon-button" uk-icon="icon: cog"></a>
                            <div uk-dropdown="mode: click;pos: bottom-justify">
                                <ul class="uk-list">
                                    <li>
                                        <a class="uk-icon-link" href="{{ route('articles.edit',['id' => $article->id]) }}">
                                            <span uk-icon="icon: file-edit"></span>
                                            Редактировать
                                        </a>
                                    </li>
                                    <li>
                                        <a class="uk-icon-link" href="#">
                                            <span uk-icon="icon: trash"></span>
                                            Удалить
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $articles->links('partials.paginate') }}
    @endif


@endsection