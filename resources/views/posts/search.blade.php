<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>検索画面</title>
    </head>
        <body>
            <form>
            <h1 class="title">検索画面</h1>
            <div>
                カテゴリーページへ
                <option>
                    @foreach($categories as $category)
                        <p><a href="posts/{{$category->id}}">{{$category->name}}</a></p>
                    @endforeach
                </option>
            </div>
            <div>
                都道府県指定ページへ
                <option>
                    @foreach($prefectures as $prefecture)
                        <p><a href="posts/{{$prefecture->id}}">{{$prefecture->name}}</a></p>
                    @endforeach
                </option>
            </div>
        </form>
    </body>
</html>
