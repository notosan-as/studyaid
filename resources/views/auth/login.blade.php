@extends('app')

@section('title', 'ログイン')

@section('content')
@include('nav')
<div class="container">
    <div class="row">
        <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
            <div class="card mt-3">
                <div class="card-body text-center">
            <div class="title">ログイン</div>

            @include('error_card_list')

            <div class="card-text">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="md-form">
                <label for="email">メールアドレス</label>
                <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}">
                </div>

                <div class="md-form">
                <label for="password">パスワード</label>
                <input class="form-control" type="password" id="password" name="password" required>
                </div>

                <div class="text-pass">
                <a href="{{ route('password.request') }}" class="card-text">パスワードを忘れた方はこちら</a>
                </div>

                <input type="hidden" name="remember" id="remember" value="on">
                <button class="btn btn-post" type="submit">ログイン</button>
            </form>
            <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-home">
            <i class="fab fa-google mr-1"></i>Googleアカウントでログイン
            </a>
            <p class="line"></p>
            <small>登録せずに閲覧して見たい方はこちらから</small><br>
            <button class="btn btn-home" type="submit">ゲストユーザーでログイン</button>
            <p class="line"></p>
            <div class="mt-0">
                <a href="{{ route('register') }}" class="btn btn-home">新規登録はこちらから</a>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('foot')
@endsection
