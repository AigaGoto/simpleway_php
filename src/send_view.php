<?php
require('send_mail.php')
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