<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="../css/style.css" rel="stylesheet">
  <title>〇〇の選択肢</title>
</head>
<body>
  <h1>質問選択肢編集画面</h1>

<form action="{{ route('choicecrud.update', $choices->id) }}" method="POST">
  <table border="1" class="table table-striped table-hover">
    <tr>
        <th scope="col">質問番号</th>
        <th scope="col">写真</th>
        <th scope="col">選択肢1</th>
        <th scope="col">選択肢2</th>
        <th scope="col">選択肢(正解)</th>
    </tr>
    <tr>
        <td>{{ $choices->id }}</td>
        <td><img src="{{ asset('storage/image/' . $choices->image1)}}"></td>
          {{-- @csrf
          @method('PUT') --}}
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="area" value="{{ $choices->area }}">
        <td><input type="text" name="choice1" value="{{ $choices->choice1 }}"></td>
        <td><input type="text" name="choice2" value="{{ $choices->choice2 }}"></td>
        <td><input type="text" name="choice3" value="{{ $choices->choice3 }}"></td>
    </tr>
  </table>  
<input type="submit" value="編集する">
</form>

</body>
</html>



{{-- 登録済みの設問の順序を変更可能ですか？		 --}}
{{-- TODO
  - テーブルの形の変更
  　choice ファイルを変更
  
  --}}