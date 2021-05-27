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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <h1>My Page</h1>
                    <p></p>
                    <h2>Blog Name</h2>
                   
                    <div class = "posts">
                        @foreach ($posts as $post)
                            <div class = "post">
                                <a href='/posts/{{ $post->id }}'><h2 class = "title">{{ $post->title }}</h2></a>
                                <p class = "body">{{ $post->body }}</p>
                            </div>
                           
                        @endforeach
                    </div>
                    <div class='back'>[<a href='/posts'>back</a>]</div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
@endsection