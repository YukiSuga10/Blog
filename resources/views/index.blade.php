@extends('layouts.app')

@section('content')

<!DOCTY<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
    <body>
        <h1>Blog Name</h1>
        <p class='create'>[<a href='/posts/create'>create</a>]</p>
        <p class='search'>[<a href='/posts/search'>検索</a>]</p>
        <div class = "posts">
            @foreach ($posts as $post)
                <div class = "post">
                   <a href='{{ action('PostController@UserDetail', $user->id) }}'><h2 class = "title">{{ $user->title }}</h2></a>
                    <p class = "body">{{ $user->body }}</p>
                </div>
                @empty
                <p>投稿はありません</p>
            @endforeach
        </div>
        <form method='GET' action="/">
            {{ csrf_field() }}
            <button type="submit">ログアウト</button>
        </form>
        <div class='paginate'>
            {{ $posts->links()}}
        </div>
    </body>
</html>
@endsection