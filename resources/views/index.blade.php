@extends('app')

@section('title','studyaid | index')

@section('content')
@include('nav')
<!-- Background image -->
<div class="p-5 text-center bg-image"
    style="background-image: url('image/index_image.webp');height: 400px;">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-body">
            <h1 class="mb-3">Studyaid</h1>
            <h4 class="mb-3">勉強を楽しく記録しよう</h4>
        </div>
    </div>
</div>
<!-- Background image -->
<div class="p-3">
    <h4>Studyaidとは</h4>
</div>
<div class="container">
    <div class="row">
        <div class="col-md">
        テストテストテストテストテストテストテストテストテストテストテストテスト<br>
        テストテストテストテストテストテストテストテストテストテストテストテスト<br>
        テストテストテストテストテストテストテストテストテストテストテストテスト
        </div>
        <div class="col-md">
        テストテストテストテストテストテストテストテストテストテストテストテスト<br>
        テストテストテストテストテストテストテストテストテストテストテストテスト<br>
        テストテストテストテストテストテストテストテストテストテストテストテスト
        </div>
        <div class="col-md">
        テストテストテストテストテストテストテストテストテストテストテストテスト<br>
        テストテストテストテストテストテストテストテストテストテストテストテスト<br>
        テストテストテストテストテストテストテストテストテストテストテストテスト
        </div>
    </div>
</div>
<div class="p-3 text-center">
    <a class="btn btn-primary" href="{{ route('register') }}" role="button">新規登録</a><br>
    <a class="btn btn-primary" href="{{ route('login') }}" role="button">ログイン</a><br>
    <a class="btn btn-primary" href="#" role="button">ゲストユーザーでお試しログイン</a><br>
</div>
