<nav class="navbar navbar-expand navbar-dark bg-info">
<div class="container">

    @guest
    <a class="navbar-brand" href="/">Studyaid</a>
    <div class="d-flex align-items-center">
    <a class="btn btn-outline-light" data-mdb-ripple-color="dark"　
    href="{{ route('login') }}" role="button">ログイン</a>
    <a class="btn btn-outline-light" data-mdb-ripple-color="dark"　
    href="{{ route('register') }}" role="button">新規登録</a>
    </div>
    @endguest

    @auth
    <a class="navbar-brand" href="/home">Studyaid</a>
    <div class="d-flex align-items-center">
    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="btn btn-outline-light" data-mdb-ripple-color="dark" type="submit">
    ログアウト
    </button>
    </form>
    <a class="btn btn-outline-light" data-mdb-ripple-color="dark"　href="{{ route('mypage') }}" role="button">設定</a>
    </div>
    @endauth

</div>
</nav>

<!-- フラッシュメッセージ -->
@if (session('flash_message'))
<div class="flash_message bg-success text-center py-3 my-0">
    {{ session('flash_message') }}
</div>
@endif
