<?php

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

// メール本文を作成
$mailText = '名前：'.$fullname."\r\n"
           .'メールアドレス：'.$email."\r\n"
           .'お問い合わせ内容：'.$message."\r\n";

$headers = "From: qzectbumo@outlook.jp";

$result = mb_send_mail($email, 'お問い合わせ', $mailText, $headers);
echo $result;
?>


<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <title>お問い合わせ</title>
  </head>
  <body>
    <div class="container">
        <h1>送信完了</h1>
    
        <p>お問い合わせありがとうございます。</p>
        <p>送信が完了しました。</p>
    </div>

  </body>
</html>