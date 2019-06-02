@extends('templates.default')

@section('title')
    {{$post->title}}
@endsection

@section('content')
    <article>
        <h2><a href="{{ URL::action('PostController@getShow', $post->slug) }}">{{ $post->title }}</a></h2>
            @parsedown($post->body)
    </article>
@endsection