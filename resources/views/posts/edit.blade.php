<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                <div>
                <h2>桜の種類：</h2>
                @foreach($categories as $category)
                    <input type="checkbox"　value="{{ $category->id }}" name="categories_array[]">
                        {{$category->name}}
                    </input>
                @endforeach
            </div>
                <div>
                <h2>住所</h2>
                <p>都道府県
                    <select name="post[prefecture_id]" value="{{ $post->prefecture_id }}">
                    @foreach($prefectures as $prefecture)
                            <option value={{$prefecture->id}}>{{$prefecture->name}}</option>
                    @endforeach
                　　</select>
                </p>
                <p>市～
                    <input type="text" name="post[address]" value="{{$post->address}}"/>
                </p>
            </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
</html>
