<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset= 'utf-8'>
   <title>Homework1</title>
 </head> 
 <body>
  <h1>点数(1~100)を入力してください！！</h1>

  <form action="testform" method="post">
   @csrf 
   <input type="text" name="textbox">
   <input type="submit" value="送信ボタン">
  </form> 
  </body>
</html>

