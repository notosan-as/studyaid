<nav class="navbar navbar-expand navbar-dark bg-info">

<div class="container">
    <a class="navbar-brand" href="/">Studyaid</a>

    @guest
    <div class="d-flex align-items-center">
    <a class="btn btn-outline-light" data-mdb-ripple-color="dark"　href="#" role="button">ログイン</a>
    <a class="btn btn-outline-light" data-mdb-ripple-color="dark"　
    href="{{ route('register') }}" role="button">新規登録</a>
    </div>
    @endguest

    @auth
    <div class="d-flex align-items-center">

    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="btn btn-outline-light" data-mdb-ripple-color="dark" type="submit">
    ログアウト
    </button>
    </form>

    <a class="btn btn-outline-light" data-mdb-ripple-color="dark"　href="#" role="button">設定</a>
    </div>
    @endauth
</div>

</nav>
