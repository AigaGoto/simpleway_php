<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// メール本文を作成
$mailText = '名前：'.$fullname."\r\n"
           .'メールアドレス：'.$email."\r\n"
           .'お問い合わせ内容：'.$message."\r\n";

mail('qzectbumo@outlook.jp', 'お問い合わせ', $mailText);
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>サンプルページ</title>
  </head>
  <body>

    <h1>送信完了</h1>

    <p>お問い合わせありがとうございます。</p>
    <p>送信が完了しました。</p>

  </body>
</html>