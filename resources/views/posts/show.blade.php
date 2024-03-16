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
<<<<<<< HEAD
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
=======
            <p>咲いてる桜（複数表示したい＋リンク）：<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a></p>
            <p>都道府県：{{$post->prefecture_id}}</p>
            <p>住所：{{$post->adress}}</p>
>>>>>>> e8ad05d4fd4799ff3333a6e6bfe7155c014893f2
        </div>
        <div>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <a href="/">戻る</a>
        </div>
        
        <div class="comment">
            @foreach($comments as $comment)
                <p>{{$comment -> user -> name}</p>
                <p>{{$comment -> comment}}</p>
            @endforeach
            <p><a href=/posts/{post}/comment/create>コメント作成へ</a></p>
        </div>
    </body>
</html>
