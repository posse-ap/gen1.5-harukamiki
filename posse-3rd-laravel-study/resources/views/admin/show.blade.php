<h1>出題リスト画面</h1>
<p><a href="{{ route('crud.index')}}">出題一覧画面</a></p>
 
<table border="1">
    <tr>
        <th>id</th>
        <th>地域名</th>
    </tr>
    <tr>
        <td>{{ $area->id }}</td>
        <td>{{ $area->area  }}</td>
        <td>今後全ての質問ここに置きたい</td>
    </tr>
</table>