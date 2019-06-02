@extends('templates.default')

@section('title')
    Home
@endsection

@section('content')

    @if($posts->count())
        @foreach ($posts as $post)
            <article>
            <h2><a href="{{ URL::action('PostController@getShow', $post->slug) }}">{{ $post->title }}</a></h2>
                @parsedown(Str::limit($post->body), 100)
                <a href="{{ URL::action('PostController@getShow', $post->slug) }}">Read more &rarr;</a>
            </article> 
        @endforeach
    @endif
   
@stop