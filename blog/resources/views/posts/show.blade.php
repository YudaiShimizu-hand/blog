<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit"><span onclick="return deletePost(this);">delete</span></button>
        </form> 
        <h2 class="title">
            {{ $post->title }}
        </h2>
        <div class="content">
            <div class="content_post">
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script>
            function deletePost(e){
                'use strict'
                if(confirm('本当に削除しますか？\n よろしいですか？')){
                    document.getElementById('form_delete').submit();
                }else{
                    return false;
                }
            }
        </script>
    </body>
</html>