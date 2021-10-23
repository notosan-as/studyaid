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

<div class="index-title">Studyaidとは？</div>
<div class="index-main">毎日の学習時間を記録できるサービスです</div>

<section class="blog">
	<div class="section-inner">
		<div class="card-items">
			<div class="card-item">
				<div class="card-img"><img src="image/index1.png" width="80%"></div>
				<p>毎日の学習を記録することができます。</p>
			</div>
            <div class="card-item">
				<div class="card-img"><img src="image/index2.png" width="80%"></div>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit.</p>
			</div>
            <div class="card-item">
				<div class="card-img"><img src="image/index3.png" width="80%"></div>
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing, elit.</p>
			</div>
		</div>
	</div>
</section>

<div class="p-3 text-center">
    <a class="btn btn-post" href="{{ route('register') }}" role="button">新規登録</a><br>
    <a class="btn btn-home" href="{{ route('login') }}" role="button">ログイン</a><br>
    <a class="btn btn-home" href="#" role="button">ゲストユーザーでお試しログイン</a><br>
</div>
@include('foot')
@endsection
