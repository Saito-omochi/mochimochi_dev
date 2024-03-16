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
                <p>全文検索</p>
                <input type="text" name="search[keyword]" />
            </div>
            <div>
                カテゴリー指定
                <option>
                    @foreach($categories as $category)
                        <select value={{$category->id}}>{{$category->name}}</select>
                    @endforeach
                </option>
            </div>
            <div>
                都道府県指定
                <option>
                    @foreach($prefectures as $prefecture)
                        <select value={{$prefecture->id}}>{{$prefectures -> name}}</select>
                    @endforeach
                </option>
            </div>
        </form>
    </body>
</html>
