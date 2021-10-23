@extends('app')

@section('title', 'studyaid | 新規登録')

@section('content')
@include('nav')
<div class="container">
    <div class="row">
    <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <div class="card mt-3">
        <div class="card-body text-center">
            <div class="title">新規登録</div>

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
                <button class="btn btn-post" type="submit">新規登録</button>
            </form>

            <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-home">
            <i class="fab fa-google mr-1"></i>Googleアカウントで登録</a>
            <p class="line"></p>
            <small>登録せずに閲覧して見たい方はこちらから</small><br>
            <button class="btn btn-home" type="submit">ゲストユーザーでログイン</button>
            <p class="line"></p>
            <div class="mt-0">
                <a href="{{ route('login') }}" class="btn btn-home">登録済みの方はこちらからログイン</a>
            </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('foot')
@endsection
