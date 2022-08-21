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
            .'お問い合わせ内容：'."\r\n".$message."\r\n";

$headers = [
         "From"=>"aaa@example.com",
         "Content-Transfer-Encoding"=>"8bit",
         "Content-Type"=>"text/plain; charset=UTF-8"
        ];

// ユーザーにメールを送信
$result_user = mb_send_mail($email, $subject, $mailText, $headers);

// 管理者にメールを送信
$result_admin = mb_send_mail("aaa@example.com", $subject, $mailText, $headers);
?>