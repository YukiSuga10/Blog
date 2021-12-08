<!DOCTY<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
    <body>
        <h1>検索結果</h1>
        <div class = "posts">
            @foreach ($results as $search)
                <div class = "post">
                    <a href='/posts/{{ $search->id }}'><h2 class = "title">{{ $search->title }}</h2></a>
                    <p class = "body">{{ $search->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='back'>[<a href='/posts'>back</a>]</div>
        <div class="paginate">
            {{ $results->appends(request()->input())->links() }}
        </div>
    </body>
</html>