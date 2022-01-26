<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>〇〇の選択肢</title>
</head>
<body>
  <h1>質問選択肢編集画面</h1>

  <form action="" method="POST">
    @csrf
    @method('PUT')
    <label>地域名：<input type="text" name="name" value="{{ $area->name }}"></label>
    <input type="submit" value="編集する">
</form>

</body>
</html>