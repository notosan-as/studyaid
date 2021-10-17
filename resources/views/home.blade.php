@extends('app')

@section('title','studyaid | myhome')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <h5 class="card-title">{{ \Carbon\Carbon::now()->format("Y年m月d日") }} / {{ $user->name }}</h5>
        <p class="card-text">
        トータル学習時間 {{ $totaltime }}分
        </p>
        <p class="card-text">
        今月の勉強時間 {{ $totalmonthtime }}分
        </p>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="{{ route('study.index') }}" class="btn btn-primary">今日の学習を投稿する</a>
    <a href="{{ route('setup.index') }}" class="btn btn-primary">学習内容の設定</a>
    <a href="{{ route('post.index') }}" class="btn btn-primary">みんなの投稿を見る</a>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
					<a class="btn btn-outline-secondary float-left" href="{{ url('/home/?date=' . $calendar->getPreviousMonth()) }}">前の月</a>
					<span>{{ $calendar->getTitle() }}</span>
					<a class="btn btn-outline-secondary float-right" href="{{ url('/home/?date=' . $calendar->getNextMonth()) }}">次の月</a>
				</div>
				<div class="card-body">
					{!! $calendar->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
