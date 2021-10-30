@extends('app')

@section('title','studyaid | mypage')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <div class="title">ユーザー情報</div>
        <br>
        <p class="mypage-text">
        ユーザー名：　{{ $user->name }} <br>
        メールアドレス：　{{ $user->email }}
        </p>
        <br>
        @if (Auth::id() != 1)
        <a href="{{ route('password.request') }}" class="card-text">パスワードを再設定する</a>
        @endif
    </div>
</div>
<div class="btn-mypage">
    <a href="/home" class="btn btn-home">マイページに戻る</a>
</div>
@include('foot')
@endsection
