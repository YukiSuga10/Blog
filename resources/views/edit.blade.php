
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
        @if (Auth::id() == 1 && Auth::id() != $posts->user_id)
        <script>
            alert("編集はできません");
        </script>
        <p class="text-danger" style="color:red">※ゲストユーザーは、編集できません。</p>
        @endif
        <form action="/posts/{{ $post->id }}" method="POST">
            {{ csrf_field() }}
            @method('PUT')
            <div class='title'>
            <h2>Title</h2>    
            <input type='text' name='post[title]' value={{ $post->title }}>
            <p class='title_error' style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class='body'>
            <h2>Body</h2>    
            <textarea name='post[body]'>{{ $post->body }}</textarea>
            <p class='body_error' style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            @if (Auth::id()== 1)
            <a href="/posts/{{ $post->id }}">戻る</a>
            @else
            <input type='submit' value='update'>
           
            @endif
        </form>
        
    </body>
</html>