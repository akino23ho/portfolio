
    <body>
          @extends('layouts.app')
          @section('content')
        
        <div class='posts'>
            
            <h2>進捗状況</h2>
            @foreach ($posts as $post)
            <div class='post'>
                <small>{{ $post->user->name}}</small>
                <h2 class='progress'><a href="/posts/{{ $post->progress }}">{{ $post->title }}</a></h2>
                
                <p class='content'>{{ $post->content }}</p>
                
                
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">

                     @csrf
         　　　　　　　　　　@method('DELETE')
        　　　　　　　　<button type="submit">delete</button> 
                 </form>            
                 
            </div>
            @endforeach
            {{Auth::user()->name}}

            [<a href='/posts/create'>進捗を報告する</a>]
            @endsection
        </div>
        
        <div class='posts'>

    {{-- postの数だけ繰り返す --}}
    @foreach($posts as $postt)
    
        ID:
        <h5 class='id'>{{ $post->id }}</h5>  
        文:
        <h5 class="content">{{$post->content}}</h5>
        進捗割合:
        <h5 class='progress'>{{ $post->progress }}</h5>
        
        
        
        好きな教科:
        <h5 class='subject'>
        
        {{-- ある生徒に関連する教科の数だけ繰り返す --}}
        @foreach($student->subjects as $subject)   
            {{ $subject->subject_name }}
        @endforeach
        
        </h5>
                
    @endforeach
    
</div>
        
　　　　
        
        
    </body>
</html>