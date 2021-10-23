@extends('app')

@section('title','studyaid | mypage')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <div class="card-title name"><i class="fas fa-book"></i>
            　{{ \Carbon\Carbon::now()->format("Y年m月d日") }} 　 {{ $user->name }}さんのマイページ</div>
        <p class="card-text time">
        トータル学習時間 {{ $totaltime }}分　/　今月の勉強時間 {{ $totalmonthtime }}分
        </p>
    </div>
    <div class="card-bottom">
        <a href="{{ route('study.index') }}" class="btn btn-post"><i class="fas fa-edit size"></i>　今日の学習を投稿する</a>
        <a href="{{ route('setup.index') }}" class="btn btn-home">学習内容の設定</a>
        <a href="{{ route('post.index') }}" class="btn btn-home">みんなの投稿を見る</a>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header calendar-main">

                    <div class="title-left">
                    <a href="{{ url('/home/?date=' . $calendar->getPreviousMonth()) }}" class="btn calendar-btn"><i class="fas fa-angle-double-left"></i></a>
                    </div>

                    <div class="title-center">
				<span class="calendar-title">{{ $calendar->getTitle() }}</span>
                    </div>

                    <div class="title-right">
                    <a href="{{ url('/home/?date=' . $calendar->getNextMonth()) }}" class="btn calendar-btn"><i class="fas fa-angle-double-right"></i></a>
                    </div>

                </div>
				<div class="card-body">
					{!! $calendar->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@include('foot')
@endsection
