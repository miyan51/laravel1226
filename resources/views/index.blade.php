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
    メールアドレス<br>
    <input type="email" name="email"><br>
    <button type="submit">送信する</button>
  </form>

</body>

</html>