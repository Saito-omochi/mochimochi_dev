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
                <h2>カテゴリー</h2>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
                <div>
                <h2>住所</h2>
                <p>都道府県
                    @foreach($prefectures as $prefecture)
                        <select>
                            <option value={{$prefecture->id}}>{{$prefecture->name}}</option>
                        </select>
                    @endforeach
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
