<?php
// $_POST[]によって受け取ったデータを変数に代入
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>サンプルページ</title>
  </head>
  <body>

    <h1>確認画面</h1>

    <form action="send.php" method="post">
      <!-- $_POST[]の部分を変数に書き換える -->
      名前<br>
      <input type="text" name="fullname" value="<?php echo $fullname; ?>" disabled><br>

      メールアドレス<br>
      <input type="email" name="email" value="<?php echo $email; ?>" disabled><br>

      お問い合わせ内容<br>
      <textarea name="message" rows="8" cols="80" disabled><?php echo $message; ?></textarea><br>

      <!-- 入力画面から受け取ったデータを格納 -->
      <input type="hidden" name="fullname" value="<?php echo $fullname; ?>">
      <input type="hidden" name="email" value="<?php echo $email; ?>">
      <input type="hidden" name="message" value="<?php echo $message; ?>">

      <input type="submit" value="送信">
    </form>

  </body>
</html>