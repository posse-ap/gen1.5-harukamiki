<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
    <main>
        <h2>ログイン</h2>
        <form action="" method="POST">
            @csrf
            <label for="email">email</label>
            <input id="email" type="email" placeholder="メールアドレス" >
            {{-- @error('email')
            @enderror --}}
            
            <label for="password">password</label>
            <input id="password" type="password" placeholder="パスワード" >
            {{-- @error('password')
            @enderror --}}

            <input type="submit" value="ログイン">
        </form>
    </main>
    </body>
    @section('content')
    @if(Auth::check())
        <p>USER: {{ $user->name . '(' . $user->email . ')' }}</p>    
    @else
        <p>ログインしていません(<a href="/login">ログイン</a>)
        <a href="/register">登録</a></p>
    @endif
@endsection

</html>
