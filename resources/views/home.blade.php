@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
           

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1>Blog Name</h1>
                   @if (Auth::id() == 1)
                   
                   @else
                        <p class='create'>[<a href='/posts/create'>create</a>]</p>
                        <p class='mypage'>[<a href="/mypage/{{Auth::id()}}">マイページへ</a>]</p>
                    @endif
                        <p class='search'>[<a href='/posts/search'>検索</a>]</p>
                        <div class = "posts">
                            @foreach ($posts as $post)
                                <div class = "post">
                                    <a href='/posts/{{ $post->id }}'><h2 class = "title">{{ $post->title }}</h2></a>
                  
                                    <h5><a href = '/mypage/{{$post->user->id}}'>{{$post->user->name}}</a></h5>
                                    <p class = "body">{{ $post->body }}</p>
                                    <p>-----------------------------------------------</p>
                                </div>
                            @endforeach
                        </div>
                    <div class='paginate'>
                        {{ $posts ?? ''->links()}}
                    </div>
                 </div>
    
        </div>
    </div>
</div>
@endsection
