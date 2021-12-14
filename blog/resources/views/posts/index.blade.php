@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        {{Auth::user()->name}}
        <h1>Blog Name</h1>
        [<a href='/posts/create'>create</a>]
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <small>{{ $post->user->name }}</small>
                    <a href="/posts/{{$post->id}}"><h2 class='title'>{{ $post->title }}</h2></a>
                    <a href="/categories/{{$post->category->id}}">{{ $post->category->name }}</a>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
             <div>
                @foreach($questions as $question)
                    <a href="https://teratail.com/questions/{{ $question['id'] }}">
                    <div>{{ $question['title'] }}</div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>
@endsection