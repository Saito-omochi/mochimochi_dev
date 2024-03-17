<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>チーム開発会へようこそ！</h1>
        <h2>投稿作成</h2>
        <form action="/posts" method="POST">
            @csrf
            <div>
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div>
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div>
                <h2>カテゴリー</h2>
                @foreach($categories as $category)
                    <input type="checkbox" value="{{ $category->id }}" name="categories_array[]">
                        {{$category->name}}
                    </input>
                @endforeach
            </div>
            <div>
                <h2>住所</h2>
                <p>都道府県
                <select name="prefecture[prefecture]">
                    @foreach($prefectures as $prefecture)
                            <option value={{$prefecture->id}}>{{$prefecture->name}}</option>
                    @endforeach
                </select>
                </p>
                <p>市～
                    <input type="text" name="post[address]" />
                    <p class="title__error" style="color:red">{{ $errors->first('post.address') }}</p>
                </p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>
