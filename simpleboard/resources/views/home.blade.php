<!DOCTYPE html>  
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>トップ画面
       </title>
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    </head>
    <body>
        <div id="header">
            <h1><img id="NBA" src="{{ asset('img/NBA.jpg') }}" alt="ティップオフ" /></h1>
        </div>
        <div id="wrapper">
            <div id="nav">
                <ul>
                    <li><a href="home">トップ</a></li>
                    <li><a href="#">ナビ２</a></li>
                    <li><a href="#">ナビ３</a></li>
                    <li><a href="zikosyoukai">自己紹介</a></li>
                    <li><a href="otoiawase">お問い合わせ</a></li>
                </ul>
            </div>
            <div id="container">
                <div id="main">
                    <div class="post">
                        <p>ここは文章が入ります。ここは文章が入ります。ここは文章が入ります。<br />今は、適当な文章を入れてあります。これをダミーテキストといいます。</p>
                    </div>
                    <div class="post clearfix">
                        <h2>小見出し１</h2>
                        <p>
                            コンテンツ１の本文になります。コンテンツ１の本文となります。コンテンツ１の本文となります。コンテンツ１の本文となります。
                            コンテンツ１の本文となります。コンテンツ１の本文となります。コンテンツ１の本文となります。コンテンツ１に本文となります。
 　　　　　　　　　　　　　　</p>        
                        <p><a href="#">→コンテンツ１のページへ</a></p>
                    </div>
                    <div class="post clearfix">
                        <h2>小見出し２</h2>
                        <p>
                            コンテンツ２の本文となります。コンテンツ２の本文となります。コンテンツ２の本文となります。コンテンツ２の本文となります。
                            コンテンツ２の本文となります。コンテンツ２の本文となります。コンテンツ２の本文となります。コンテンツ２の本文となります。
                        </p>
                    </div>
                </div>
                <div id="side">
                    <div class="box">
                        <h2>サイドメニュー1</h2>
                        <div class="boxBody">
                            <ul>
                                <li>項目１</li>
                                <li>項目２</li>
                                <li>項目３</li>
                                <li>項目４</li>
                            </ul>
                        </div>
                    </div>
                    <div class="box">
                        <h2>サイドメニュー２</h2>
                        <div class="boxBody">
                            <ul>
                                <li>項目１</li>
                                <li>項目２</li>
                                <li>項目３</li>
                                <li>項目４</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <p>&copy; 20xx ○○ All Rights Reserved.</p>
        </div>
    </body>
</html>