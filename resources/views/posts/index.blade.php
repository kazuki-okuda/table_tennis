<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="./css/index.css">
    </head>
    
    <body>
        <header>
            <div class=headerContents>
                <h1>友達プロフィール一覧</h1>
                <nav>
                    <ul>
                        <li>My profile</li>
                　　      <li>友達追加</li>
            　　      </ul>
        　　      </nav>
            </div>
    　　</header>
        <body>
            <div class=bodyContents>
                <p class=new>新規作成</p>
                <div class=profile>
                    <h3>idAさん</h3>
                    <p class=more>詳細</p>
                </div>
            </div>
            <br>
            <br>
            <br>
            <h1>チーム開発会へようこそ！</h1>
            <h2>投稿一覧画面</h2>
            <a href='/posts/create'>新規投稿</a>
            <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        タイトル：<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </p>
                    <p>カテゴリー：<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a></p>
                </div>
            @endforeach
            </div>
            <div>
            {{ $posts->links() }}
            </div>
        </body>
    </body>
</html>
