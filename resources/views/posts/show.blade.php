<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>詳細画面</h1>
        <div>
            <p>タイトル：{{ $post->title }}</p>
            <p>本文：{{ $post->body }}</p>
            <p>都道府県：
                <a href="/prefectures/{{ $post->prefecture->id }}">{{ $post->prefecture->name }}</a>
            </p>
            <p>住所：{{ $post->address }}</p>
            <p>桜の種類：
                @foreach($post->categories as $category)   
                    <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                @endforeach
            </p>
        </div>
        <div>
            <p>コメント：</p>
            @foreach($post->comments as $comment)  
                <p>{{ $comment->comment }}</p>
            @endforeach
        </div>
        <div>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
