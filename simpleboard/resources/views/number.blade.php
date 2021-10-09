<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset= 'utf-8'>
   <title>Homework3</title>
 </head> 
 <body>
  <h1>IDを入力してください</h1>

  <form action="testform3" method="post">
   @csrf 
   <input type="text" name="textbox">
   <input type="submit" value="送信ボタン">
  </form> 
  </body>
</html>