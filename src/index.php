<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>サンプルページ</title>
  </head>
  <body>

    <h1>お問い合わせフォーム</h1>

    <form action="confirm.php" method="post">
      名前<br>
      <input type="text" name="fullname"><br>

      メールアドレス<br>
      <input type="email" name="email"><br>

      お問い合わせ内容<br>
      <textarea name="message" rows="8" cols="80"></textarea><br>

      <input type="submit" value="確認">
    </form>

  </body>
</html>