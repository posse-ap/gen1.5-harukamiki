<h1>一覧画面</h1>
<p><a href={{route('crud.create')}}>新規追加</a></p>

@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif

<table border="1">
    <tr>
        <th>地域名</th>
        <th>出題リスト</th>
        <th>編集</th>
        <th>削除</th>
    </tr>
    @foreach ($quizy_areas as $quizy_area)
    <tr>
        {{ $quizy_area->id }}
        <td>{{ $quizy_area->area }}</td>
        <th><a href="{{ route('crud.show',$quizy_area->id)}}">出題リスト</a></th>
        <th><a href="{{ route('crud.edit',$quizy_area->id)}}">編集</a></th>
        <th>
            <form action="{{ route('crud.destroy', $quizy_area->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="" value="削除">
            </form>
        </th>
    </tr>
    @endforeach
</table>