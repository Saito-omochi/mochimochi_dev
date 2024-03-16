<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>チーム開発会へようこそ！</h1>
        <h2>カテゴリー:{{ $category_name }} の投稿一覧画面</h2>
        <a href='/'>投稿一覧ページへ戻る</a>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </p>
                    <p>咲いてる桜：(カテゴリーページに移動できるように＋複数表示したい)
                    @foreach($post->category -> $categories)
                        <a href="/categories/{{ $categories->category->id }}">{{ $categories->category->name }}</a></p>
                    @endforeach
                    </p>
                    <p>都道府県：{{$post -> prefecture_id}}</p>
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </body>
</html>
