<?php
// $_POST[]によって受け取ったデータを変数に代入
$subject = $_POST['subject'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];
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

        <h1 class="title">確認画面</h1>

        <div class="form-item">
            <p class="form-item-name">件名</p>
            <input type="text" name="subject" class="form-text" value="<?php echo $subject; ?>" disabled>
        </div>

        <div class="form-item">
            <p class="form-item-name">名前</p>
            <input type="text" name="fullname" class="form-text" value="<?php echo $fullname; ?>" disabled>
        </div>

        <div class="form-item">
            <p class="form-item-name">メールアドレス</p>
            <input type="email" name="email" class="form-text" value="<?php echo $email; ?>" disabled>
        </div>

        <div class="form-item">
            <p class="form-item-name">電話番号</p>
            <input type="tel" name="tel" class="form-text" value="<?php echo $tel ?>" disabled>
        </div>

        <div class="form-item">
            <p class="form-item-name">お問い合わせ内容</p>
            <textarea name="message" rows="8" cols="80" class="m-form-textarea" disabled><?php echo $message; ?></textarea>
        </div>

        <form action="send_view.php" method="post">

            <!-- 入力画面から受け取ったデータを格納 -->
            <input type="hidden" name="subject" value="<?php echo $subject; ?>">
            <input type="hidden" name="fullname" value="<?php echo $fullname; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="message" value="<?php echo $message; ?>">

            <div class="form-button">
                <input type="button" value="修正" onclick="history.back(-1)" class="m-form-fix-button">
                <input type="submit" value="送信" class="m-form-submit-button">
            </div>
        </form>
    </div>
  </body>
</html>