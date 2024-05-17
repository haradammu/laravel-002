<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset = "UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ホーム画面</title>
@vite(['resources/sass/app.scss'])
@vite(['resources/js/app.js'])
@vite(['resources/css/app.css'])
@vite(['resources/css/signin.css'])
</head>
<body>
  <div class="container">
  <div class="mt-5">
    <x-alert type="success" :session="session('success')" />
    <h3>プロフィール</h3>
    <ul>
      <li>名前:   {{ Auth::user()->nickname  }}</li>
      <li>メール: {{ Auth::user()->email }}</li>
    </ul>

  <form action="{{ route('logout') }}" method="POST">
  @csrf
  <button class="btn btn-danger">ログアウト</button>
  </form>

  </div>
  </div>
</body>
</html>
