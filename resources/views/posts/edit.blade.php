<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>～進捗報告～</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
<body>
            @extends('layouts.app')
            @section('content')
    <h2 class="title">〈編集画面〉</h2>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class='content__title'>
                <h2>Progress</h2>
                <input type='text' name='post[progress]' value="{{ $post->progress }}">
            </div>
            <div class='content__body'>
                <h2>報告内容</h2>
                <input type='text' name='post[content]' value="{{ $post->content }}">
                
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
    @endsection
</body>