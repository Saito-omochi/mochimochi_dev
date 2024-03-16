<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>桜の名所</h1>
        <h2>投稿一覧画面</h2>
        <a href='/posts/create'>新規投稿</a>
        <a href='/search'>検索画面へ</a>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </p>
<<<<<<< HEAD
                    <p>
                        都道府県：<a href="/prefectures/{{ $post->prefecture->id }}">{{ $post->prefecture->name }}</a>
                    </p>
                    <p>カテゴリー：
                        @foreach($post->categories as $category)
                            <a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                        @endforeach
                    </p>
=======
                    <p>咲いてる桜：(カテゴリーページに移動できるように＋複数表示したい)
                    @foreach($post->category -> $categories)
                        <a href="/categories/{{ $categories->category->id }}">{{ $categories->category->name }}</a></p>
                    @endforeach
                    </p>
                    <p>都道府県：{{$post -> prefecture_id -> name}}</p>
>>>>>>> e8ad05d4fd4799ff3333a6e6bfe7155c014893f2
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </body>
</html>
