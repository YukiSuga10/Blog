<!DOCTY<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
    </head>
    <body>
        <h1>検索画面</h1>
        <form action='/result' method="GET">
            {{ csrf_field() }}
            <div class='search'>
            <h2>タイトル名：</h2>
            <input type='text' name='search[title]' placeholder='タイトル名' value="{{ old('search.title') }}">
            <p class='title_error' style="color:red">{{ $errors->first('search.title') }}</p>
            </div>
            <input type='submit' value='検索'>
        </form>
        <div class='back'>[<a href='/posts'>back</a>]</div>
    </body>
</html>