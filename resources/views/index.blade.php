@extends('app')

@section('title','studyaid | index')

@section('content')
@include('nav')
<!-- Background image -->
<div class="p-5 text-center bg-image"
    style="background-image: url('image/index_image.webp');height: 400px;">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-body">
            <h1 class="mb-3 main-title">Studyaid</h1>
            <h4 class="mb-3 main-title-body">勉強を楽しく記録しよう</h4>
        </div>
    </div>
</div>
<!-- Background image -->

<div class="index-title">Studyaidとは？</div>
<div class="index-main">毎日の学習時間を記録できるサービスです<br>記録した学習時間は月別の一覧で見ることができます。</div>

<div class="card-deck blog">
	<div class="card card-ori">
		<img class="card-img-top card-img" src="image/index1.png" alt="Card image">
		<div class="card-body">
		<p class="card-text　text-main">毎日の学習時間や内容を記録することができます。<br>
		毎月どのくらい勉強しているのかがすぐに分かります！</p>
		</div>
	</div>
	<div class="card card-ori">
		<img class="card-img-top card-img" src="image/index2.png" alt="Card image">
		<div class="card-body">
		<p class="card-text　text-main">お友達の投稿も見ることができるので、みんながどのくらい勉強しているのかがわかります。<br>
		みんなの投稿を見てやる気アップ…！</p>
		</div>
	</div>
	<div class="card card-ori">
		<img class="card-img-top card-img" src="image/index3.png" alt="Card image">
		<div class="card-body">
		<p class="card-text　text-main">勉強したあとは、Studyaidで勉強時間を楽しく記録。<br>
		続けることで習慣になり、勉強することも楽しくなるはず！
		</div>
	</div>
</div>

<div class="p-3 text-center">
    <a class="btn btn-post" href="{{ route('register') }}" role="button">新規登録</a><br>
    <a class="btn btn-home" href="{{ route('login') }}" role="button">ログイン</a><br>
    <a class="btn btn-home" href="{{ route('login.guest') }}" role="button">ゲストユーザーでお試しログイン</a><br>
</div>
@include('foot')
@endsection
