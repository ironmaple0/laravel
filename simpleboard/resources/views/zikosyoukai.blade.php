<!DOCTYPE html>  
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>自己紹介画面</title>
        <link rel="stylesheet" href="{{ asset('css/stylesheet2.css') }}">
    </head>
    <body>
        <div id="header">
            <h1>自己紹介</h1>
        </div>
        <div id="wrapper">
            <div id="nav">
                <ul>
                    <li><a href="home">トップ</a></li>
                    <li><a href="#">ナビ２</a></li>
                    <li><a href="#">ナビ３</a></li>
                    <li><a href="zikosyoukai">自己紹介</a></li>
                    <li><a href="otoiawase">お問合わせ</a></li>
                </ul>
            </div>
            <div id="container">
                <div id="main">
                    <div class="post">
                    </div>
                        <div class="post clearfix">
                            <img class="left" src="{{ asset('img/Allmight.jpg') }}" alt="オールマイト" />
                           <h1>名前</h1>
                           <p>工藤　隆之介</p>
                           <h1>誕生日</h1>
                           <p>３月２０日</p>
                          <h1>血液型</h1> 
                           <p>O型</p>
                          <h1>住まい</h1>
                           <p>愛知県</p>
                　　    </div>
                    <div class="post clearfix">
                        <h2>自己紹介</h2>
                        <p class="test">
                             コンテンツ２の本文となります。コンテンツ２の本文となります。コンテンツ２の本文となります。
                             コンテンツ２の本文となります。コンテンツ２の本文となります。コンテンツ２の本文となります。
                        </p>
                    </div>
                </div>
                
        <div id="footer">
            <p>&copy; 20xx ○○ All Rights Reserved.</p>
        </div>
    </body>
</html>