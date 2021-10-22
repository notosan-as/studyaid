<nav class="navbar navbar-expand nav-color">
<div class="container">

    @guest
    <a class="navbar-brand" href="/">Studyaid</a>
    <div class="d-flex align-items-center">
    <a class="btn btn-nav"
    href="{{ route('login') }}" role="button">ログイン</a>
    <a class="btn btn-post"
    href="{{ route('register') }}" role="button">新規登録</a>
    </div>
    @endguest

    @auth
    <a class="navbar-brand" href="/home">Studyaid</a>
    <div class="d-flex align-items-center">
    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button class="btn btn-nav" type="submit">
    ログアウト
    </button>
    </form>
    <a class="btn btn-nav" data-mdb-ripple-color="dark"　href="{{ route('mypage') }}" role="button">
    <i class="fas fa-user-cog size"></i> 設定</a>
    </div>
    @endauth

</div>
</nav>

<!-- フラッシュメッセージ -->
@if (session('flash_message'))
<div class="flash_message bg-success text-center py-2 my-0">
    {{ session('flash_message') }}
</div>
@endif
