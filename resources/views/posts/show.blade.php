<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    </head>
    <body>
        <div class="title">
            <h1>{{ $post->title }}</h1>
        </div>
            <p>
                <img src="{{asset('storage/' . $post->image)}}" width="500px" height="auto" />
                <img src="{{asset('storage/' . $post->image2)}}" width="500px" height="auto" />
            </p>
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
        
        <form action="/make_comment" method="POST">
            @csrf
            <div>
                <h2>コメント</h2>
                <input type='hidden' name='comment[post_id]' value="{{ $post->id }}">
                <input type="text" name="comment[comment]" placeholder="タイトル" value="{{ old('comment.comment') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <input type="submit" value="送信"/>
        </form>
        
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
            @csrf
            @method('DELETE')
            <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
        </form>
        
        <span class="text-red-100">text-red-100</span><br>
    </body>
    <script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
</html>
