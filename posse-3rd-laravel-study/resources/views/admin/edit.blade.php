<h1>編集画面</h1>
<p><a href="{{ route('crud.index')}}">一覧画面</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
{{ $area->id }}
<form action="{{ route('crud.update',$area->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label>地域名：<input type="text" name="name" value="{{ $area->name }}"></label>
    <input type="submit" value="編集する">
</form>