<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

  <form action="/" method="POST">
    @csrf
    氏名<br>
    <input type="text" name="name"><br>
    お問い合わせ<br>
    <input type="text" name="text"><br>
    <button type="submit">送信する</button><br>
    <a href="/search">一覧画面へ</a>
  </form>

</body>

</html>