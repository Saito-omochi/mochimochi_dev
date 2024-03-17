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
        
        <div class="edit">
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
        </div>
        
        </div class="delete">
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                @csrf
                @method('DELETE')
                 <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
            </form>
        </div>    
        
        <div class="images">
            <hr>
            <img src="{{asset('storage/' . $post->image)}}" width="500px" height="auto" />
            <img src="{{asset('storage/' . $post->image2)}}" width="500px" height="auto" />
            <hr>
        </div>  
        
        <div class="information">
            <p>{{ $post->body }}</p>
            <p>都道府県：
                <a href="/prefectures/{{ $post->prefecture->id }}">{{ $post->prefecture->name }}</a>
            </p>
            <p>住所：{{ $post->address }}</p>
            <p>見られる桜：
                @foreach($post->categories as $category)   
                    <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                @endforeach
            </p>
        </div>
        
        <div class="comment_title" style='padding-top: 15px'>
            <h2>コメント</h2>
        </div>
        
        <div class="comment_space">
        
        <div class="comment" style='border:solid 1px; margin-bottom: 0px; padding-left: 15px'>    
            @foreach($post->comments as $comment)  
                <p>{{ $comment->comment }}</p>
            @endforeach
        </div>
        
        <div class="to comment" style='padding-left: 15px'>
            <form action="/make_comment" method="POST">
                @csrf
                <div>
                    <h4>コメントする</h4>
                    <input type='hidden' name='comment[post_id]' value="{{ $post->id }}">
                    <input type="text" name="comment[comment]" placeholder="コメントを入力" value="{{ old('comment.comment') }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <input type="submit" value="送信"/>
            </form>
        </div>
        
        </div>
        
        <div class="back" style='padding-top: 25px'>
            <a href="/">一覧へ戻る</a>
        </div>
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
