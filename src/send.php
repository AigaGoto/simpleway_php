<?php

// エラーを出力する
// ini_set('display_errors', "On");

mb_language("Japanese");
mb_internal_encoding("UTF-8");

$subject = $_POST['subject'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

// メール本文を作成
$mailText = '件名：'.$subject."\r\n"
            .'名前：'.$fullname."\r\n"
            .'メールアドレス：'.$email."\r\n"
            .'電話番号：'.$tel."\r\n"
            .'お問い合わせ内容：'.$message."\r\n";

$headers = [
         "From"=>"qzectbumo@outlook.jp",
         "Content-Transfer-Encoding"=>"8bit",
         "Content-Type"=>"text/plain; charset=UTF-8"
        ];

$result = mb_send_mail($email, $subject, $mailText, $headers);
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
        <?php if ($result) :?>

        <h1>送信完了</h1>
    
        <p>お問い合わせありがとうございます。</p>
        <p>送信が完了しました。</p>

        <?php else : ?>

        <h1>エラーが発生</h1>
    
        <p>サーバーに問い合わせてください</p>

        <?php endif; ?>
    </div>

  </body>
</html>