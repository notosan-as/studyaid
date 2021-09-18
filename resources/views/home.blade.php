@extends('app')

@section('title','studyaid | mypage')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <h5 class="card-title">ユーザー名</h5>
        <p class="card-text">
        トータル学習時間
        </p>
        <p class="card-text">
        今月の勉強時間
        </p>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="#" class="btn btn-primary">今日の学習を投稿する</a>
    <a href="#" class="btn btn-primary">学習内容の設定</a>
    <a href="#" class="btn btn-primary">みんなの投稿を見る</a>
</div>
