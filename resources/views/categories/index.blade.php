<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
    </head>
    <body class="body">
        <h1 class="pagetitle">桜の名所</h1>
        <h2>カテゴリー:{{ $category_name }} の投稿一覧画面</h2>
        <a href='/'>投稿一覧ページへ戻る</a>
        <div>
            @foreach ($posts as $post)
                <div class="block">
                    <p class="title">
                        タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </p>
                    <p>都道府県：
                        <a href="/prefectures/{{ $post->prefecture->id }}">{{ $post->prefecture->name }}</a>
                    </p>
                    <p>カテゴリー：
                        @foreach($post->categories as $category)
                            <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                        @endforeach
                    </p>
                    <p>画像
                        <img src="{{asset('storage/' . $post->image)}}" width="500px" height="auto" />
                        <img src="{{asset('storage/' . $post->image2)}}" width="500px" height="auto" />
                    </p>
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </body>
</html>
