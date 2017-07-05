<?php
/**
 * @var \Illuminate\Database\Eloquent\Collection $albums
 * @var \App\Album $album
 * @var \App\Song $song
 */
?>

@extends('layout')

@section('title','Альбомы группы Кино')
@section('description','Альбомы группы Кино')

@section('content')
    @if($albums->isNotEmpty())
        @foreach($albums as $album)
            <h3>{{ $album->created_at }}г. &ndash; <q>{{ $album->title }}</q>
                ({{ $album->songs->count()}} {{ trans_choice('ru.track', $album->songs->count()) }})
            </h3>
            @if($album->songs->isNotEmpty())
                <ol>
                    @foreach($album->songs as $song)
                        <li>{{ $song->name }}</li>
                    @endforeach
                </ol>
            @endif
        @endforeach
    @endif
@endsection