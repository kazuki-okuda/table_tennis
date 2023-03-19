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
                        <li><a href="/posts/create">My profile</a></li>
                        <li><a href="/posts/create">友達追加</a></li>
            　　      </ul>
        　　      </nav>
            </div>
    　　</header>
        <body>
            <div class=bodyContents>
                <p class=new><a href="/posts/create">新規作成</a></p>
                 @foreach($friends as $friend)
                <div class=profile>
                   
                    <h3>{{$friend->name}}</h3>
                    <p class=more>詳細</p>
                   
                </div>
                 @endforeach
            </div>
            <br>
            <br>
            <br>
            
        </body>
    </body>
</html>
