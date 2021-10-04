@extends('app')

@section('title', 'studyaid | 新規登録')

@section('content')
@include('nav')
<div class="container">
    <div class="row">
    <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <div class="card mt-3">
        <div class="card-body text-center">
            <h2 class="h3 card-title text-center mt-2">新規登録</h2>

            @include('error_card_list')

            <div class="card-text">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="md-form">
                <label for="name">ユーザー名</label>
                <input class="form-control" type="text" id="name" name="name" required value="{{ old('name') }}">
                <small>英数字3〜16文字で入力してください</small>
                </div>

                <div class="md-form">
                <label for="email">メールアドレス</label>
                <input class="form-control" type="text" id="email" name="email" required value="{{ old('email') }}" >
                </div>
                <div class="md-form">
                <label for="password">パスワード</label>
                <input class="form-control" type="password" id="password" name="password" required>
                </div>
                <div class="md-form">
                <label for="password_confirmation">パスワード(確認)</label>
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">新規登録</button>
            </form>

            <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-block btn-danger">
            <i class="fab fa-google mr-1"></i>Googleでログイン</a>

            <small>登録せずに閲覧して見たい方はこちらから</small>
            <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ゲストユーザーでログイン</button>

            <div class="mt-0">
                <a href="{{ route('login') }}" class="card-text">登録済みの方はこちらからログイン</a>
            </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
