<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1>一覧画面</h1>

<button class="btn btn-primary mb-3">
    <a href={{route('crud.create')}} class="link-light">新規追加</a>
</button>
<button class="btn btn-primary mb-3">
    <a href="/crud?order=backward" class="link-light">逆順</a>
</button>
<button class="btn btn-primary mb-3">
    <a href="/crud?order=byupdate" class="link-light">更新順</a>
</button>

@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif

<table class="table table-striped table-hover">
    <tr>
        <th scope="col">#</th>
        <th scope="col">地域名</th>
        <th scope="col">出題リスト</th>
        <th scope="col">編集</th>
        <th scope="col">削除</th>
    </tr>
    @foreach ($quizy_areas as $quizy_area)
    <tr>
        <td>{{ $quizy_area->id }}</td>
        <td>{{ $quizy_area->area }}</td>
        <th><a href="{{ route('crud.show',$quizy_area->id)}}" class="btn btn-default border btn-outline-secondary">{{ $quizy_area->area }}リスト</a></th>
        <th><a href="{{ route('crud.edit',$quizy_area->id)}}"  class="btn btn-default border btn-outline-secondary">編集</a></th>
        <th>
            <form action="{{ route('crud.destroy', $quizy_area->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="" value="削除"  class="btn btn-default border btn-outline-secondary">
            </form>
        </th>
    </tr>
    @endforeach
</table>

</body>
</html>