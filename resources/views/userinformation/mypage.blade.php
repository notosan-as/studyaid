@extends('app')

@section('title','studyaid | mypage')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <h5 class="card-title">Mypage</h5>
        <p class="card-text">
        ユーザー名：　{{ $user->name }}
        </p>
        <p class="card-text">
        メールアドレス：　{{ $user->email }}
        </p>
    </div>
    <div class="text-left">
    <a href="{{ route('password.request') }}" class="card-text">パスワードを再設定する</a>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="/home" class="btn btn-primary">マイページに戻る</a>
</div>
@endsection
