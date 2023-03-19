<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('./css/create.css') }}">
    </head>
    
    <body>
        <div class=page>
            <div class=createContents>
                <div class=createTitle>
                     <h2>新規作成</h2>
                     <div class=createButton>
                        <p class=button id=store type=submit><a href="/posts/create">保存</a></p>
                        <p class=button id=back><a href="/posts/index">戻る</a></p>
                     </div>
                </div>
                <div class=section1>
                    <div class=section2>
                        <div class=name>
                            <p>名前</p>
                            <input type="text" style="width:29em; height:3em" placeholder="レバテック太郎"/>
                        </div>
                        <div class=birthday>
                            <p>生年月日</p>
                            <input type="text" style="width:29em; height:3em" placeholder="○年○月○日"/>
                        </div>
                    </div>
                     <div class=mail>
                          <p>メールアドレス</p>
                          <input type="text" style="width:60em; height:3em" placeholder="levtech.college@gmail.com"/>
                     </div>
                     <div class=more>
                          </p>詳細</p>
                          <textarea rows="10" style="width:60em" placeholder="○○から卒業しました。"></textarea>
                     </div>
                </div>
            </div>
            <div class=createButton2>
               <p class=you>プロフィール画像</p>
               <input type="text"style="width:22em; height:14em"/>
               <p class=you>趣味</p>
               <input type="text"style="width:22em; height:7em" placeholder="テニス"/>
               <p class=you>職業</p>
               <input type="text"style="width:22em; height:7em" placeholder="学生"/>
            </div>
            
        </div>
        <br>
    </body>
</html>
