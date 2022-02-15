
    <body>
            @extends('layouts.app')
            @section('content')
        <h2>私の進捗状況</h2>
        <form action="/posts" method="POST">
            @csrf
            
            <div class="contents">
                <h2>Progress</h2>
                <input type="text" name="post[progress]" placeholder="進捗具合を数字で記入"/>
            </div>
            <div class="body">
                <h2>報告内容</h2>
                <textarea name="post[content]" placeholder="進捗内容を詳しく記入"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        @endsection
    </body>
</html>