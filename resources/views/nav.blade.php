<nav class="navbar navbar-expand-lg nav-color">

@guest
    <a class="navbar-brand" href="/">Studyaid</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link nav-original" href="{{ route('login') }}">ログイン<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link nav-original-pink" href="{{ route('register') }}">新規登録</a>
            </li>
        </ul>
    </div>
@endguest

@auth
<a class="navbar-brand" href="/">Studyaid</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <form method="post" name="form1" action="{{ route('logout') }}">
            @csrf
                <a class="nav-link nav-original" href="javascript:form1.submit()">ログアウト<span class="sr-only">(current)</span></a>
            </form>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-original" href="{{ route('mypage') }}"><i class="fas fa-user-cog"></i>設定</a>
        </li>
    </ul>
</div>
@endauth

</nav>

<!-- フラッシュメッセージ -->
@if (session('flash_message'))
<div class="flash_message flash text-center py-1 my-0">
    {{ session('flash_message') }}
</div>
@endif
