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
  <h1>{{ $question->id }}質問選択肢編集画面</h1>

<form action="{{ route('choicecrud.update', $question->id) }}" method="POST">
  <table border="1" class="table table-striped table-hover">
    <tr>
        <th scope="col">質問番号</th>
        <th scope="col" class="small_image">写真</th>
        <th scope="col">選択肢</th>
    </tr>
    <tr>
        <td>{{ $question->id }}</td>
        <td>
          <img class="w-10" src="{{ asset('storage/image/' . $question->image1)}}">
        </td>

        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="question_number" value="{{ $question->id }}">
        <input type="hidden" name="area" value="{{ $question->area }}">

      <?php foreach ($choices as $key => $choice){ ?>
        <td><input type="hidden" name="choice_id_{{ $key }}" value="{{ $choice->id }}"></td>
        <td><input type="text" name="name_{{ $key }}" value="{{ $choice->name }}"></td>
      <?php } ?>
    </tr>
  </table>  
<input type="submit" value="編集する">
</form>

{{-- 選択肢の追加 --}}
<form action="{{ route('choicecrud.optioncrud.store', $question->id) }}" method="POST">
  <input type="hidden" name="_method" value="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="question_area" value="{{ $question->area }}">
  <input type="hidden" name="id" value="{{ $question->id }}">
  <input type="checkbox" name='validation' value="1">
  <input type="text" name='name'>
  <input type="submit" value="選択肢を追加する">
</form>

</body>
</html>