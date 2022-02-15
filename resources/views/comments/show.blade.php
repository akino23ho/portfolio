<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>～進捗報告へのコメント～</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
            @extends('layouts.app')
            @section('content')
        <div class="content">
            <div class="content__post">
            
                <h3>コメント</h3>
                <p>{{ $post->content }}</p>   
                <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p> 
                 <small>{{ $post->user->name }}</small>
            </div>
        </div>
        
        <div class="footer">
            <a href="/">戻る</a>
           
        </div>
        @endsection
    </body>
</html>
