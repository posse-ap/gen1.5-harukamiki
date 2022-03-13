<h1>新規作成画面</h1>
<p><a href="/crud">一覧画面</a></p>
 
<form action="{{ route('crud.store')}}" method="POST">
    @csrf
    <p>地域名：<input type="text" name="area" value="{{old('area')}}"></p>
    <input type="submit" value="登録する">
</form>