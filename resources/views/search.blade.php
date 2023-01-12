<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
  <form action="/search" method="get">
    @csrf
    <input type="name" name="search" />
    <input type="submit" value="氏名検索" />
  </form>

  <table>
    <tr>
      <th>名前</th>
      <th>お問い合わせ内容</th>
    </tr>
    @foreach($results as $result)
    <tr>
      <td>{{$result->name}}</td>
      <td>{{$result->text}}</td>
    </tr>
    @endforeach

  </table><br>

  <a href="/">トップへ戻る</a>
</body>

</html>