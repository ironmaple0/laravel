<!DOCTYPE html>  
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>お問い合わせ画面
       </title>
        <link rel="stylesheet" href="{{ asset('css/stylesheet3.css') }}">
        
    </head>
    <body>
        <div id="header">
            <h1>お問い合せ</h1>
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
                    <div class="post clearfix">
                        <div id="main">
                            <form action="otoiawase" method="get" name="otoiawase">
                            <tr>
                             <td align="right"><b class="koumoku">名前</b></td>                
                         <td><input type="text" name="name" size="65" maxlength="65"></td>
                                </tr>
                                <tr><br>
                            <td align="right"><b class="koumoku">性別</b></td>
                         <td><input type="radio" name="sex" value="男性"><b class="sentaku">男性</b>
                         <input type="radio" name="sex" value="女性"><b class="sentaku">女性</b></td>
                         　　　 </tr>
                           <tr><br>
                               <td align="right"><b class="koumoku2">問合内容</b></td>
                        <td><textarea name="naiyou" rows="10" cols="65"></textarea></td>
                           </tr>
                           <tr><br>
                               <td align="right"><b class="koumoku3">添付ファイル</b></td>
                         <td><input type="file" name="tennpufile"></td>
                          </tr>
                          <br>
                         <div id="submit"><input id="submit_button" type="submit" value="送信" onClick="return check();"></div>
                         </form>
                           <div id="footer">
                          <p>&copy; 20xx ○○ All Rights Reserved.</p>
                           </div>
                        </div>　　
                    </div>　
           </div>
       </div>
       <script type="text/Javascript" src="{{ asset('js/check.js') }}"></script>
  </body>
</html> 
