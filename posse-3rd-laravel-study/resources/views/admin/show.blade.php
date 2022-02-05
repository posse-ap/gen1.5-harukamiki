<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<h1>出題リスト画面</h1>
<button class="btn btn-primary mb-3"><a href="{{ route('crud.index')}}" class="link-light">出題一覧画面</a></button>
 
<table border="1" class="table table-striped table-hover">
    <tr>
        <th scope="col">質問番号</th>
        <th scope="col">写真</th>
        <th scope="col">選択肢1</th>
        <th scope="col">選択肢2</th>
        <th scope="col">選択肢(正解)</th>
    </tr>
<?php foreach($choices as $index => $choice){ ?>
    <tr>
        <td>{{ $index+1 }}</td>
        <td>
            <img src="{{ asset('image/image' . $choice->area . '-' . ($index+1) . '.png')}}">
        </td>
        <td>{{ $choice->choice1 }}</td>
        <td>{{ $choice->choice2 }}</td>
        <td>{{ $choice->choice3 }}</td>
    </tr>
<?php }; ?>
</table>

<div class="mt-3 ml-3">
<h1>新規質問追加</h1>
<form action="{{ route('choicecrud.store')}}" method="POST">
    @csrf
    <input type="hidden" name="area" value="{{ $choice->area }}">
    <p>選択肢1：<input type="text" name="choice1" value="選択肢1"></p>
    <p>選択肢2：<input type="text" name="choice2" value="選択肢2"></p>
    <p>選択肢(正解)：<input type="text" name="choice3" value="選択肢3"></p>
    <input type="submit" value="登録する">
</form>
</div>