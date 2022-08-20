# 開発環境

Dockerを用いて環境構築を行った

### Dockerのイメージ元
* php:7.2-apache
* mysql:8.0
* mailhog/mailhog

### 詳細
OS - Linux
Webサーバー - Apache
プログラミング言語 - PHP
メール送信のテスト用 - mailHog
(データベース - MySQL)

# 実装に費やした時間

10時間程度

# 実装中に問題となったこと・工夫したところ

メールの送信の確認をするのが難しかった
→ Mailhogを用いて、メールの状態を確認

PHPで入力値のバリデーションをすると、ソースコードが増える
→ HTML5以降のinputタグのバリデーションを利用

# 改善点

* スマホビューにしてもcssが崩れないようにする
* SMTPを用いて、メールを送信できる設定にする

# どのような動作テストを行ったか

localhostで実際にフォームに入力値を与え、メールの送信はMailHogを用いて、同作を確認した。
また、フォームの入力値のバリデーション用に以下のように入力値を与えた。

### 件名
セレクトボックスの3要素で動作確認をした
* ご意見
* ご感想
* その他

### 名前
* 入力値を与えない
* 自分の氏名(漢字)

### メールアドレス
* 入力値を与えない
* ＠マークを入れない入力値
* ＠マークを入れた入力値

### 電話番号
* 入力値を与えない
* 数字以外の文字列
* 11桁以外の数字
* 11桁の数字

### お問い合わせ内容
* 入力値を与えない
* 適当な文字列

# 参考資料又は参考サイト
フォームの作成方法について
[formを作成してデータを受け取る方法を解説](https://webukatu.com/wordpress/blog/33637/)
[お問い合わせフォームを作る](https://gray-code.com/php/make-the-form-introduction/)

CSSについて
[コピペで使える！HTML・CSSでフォームをおしゃれにカスタマイズする方法](https://moshashugyo.com/media/css-form-customize)

メールの送信について
[Docker ComposeでMailHogコンテナを組み合わせてメール送信の動作確認](https://zenn.dev/qljmssqh/articles/5e38a3c9123018)
[mb_send_mailで送ったメールをMailHogで受け取ると文字化けする](https://teratail.com/questions/318732)
