<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset= 'utf-8'>
   <title>Homework2</title>
 </head> 
 <body>
  <h1>数字を入力してください</h1>

  <form action="testform2" method="post">
   @csrf 
   <input type="text" name="textbox">
   <input type="submit" value="送信ボタン">
  </form> 
  </body>
</html>