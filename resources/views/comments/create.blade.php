<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>～進捗報告へのコメント～</title>
    </head>
    <body>
        <h1>私の進捗状況</h1>
        <form action="/posts" method="POST">
            @csrf
            @extends('layouts.app')
            @section('content')
            <div class="contents">
                
                <h2>コメント</h2>
                <textarea name="post[content]" placeholder="コメントを記入"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        @endsection
    </body>
</html>