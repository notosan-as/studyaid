@extends('app')

@section('title','studyaid | 今日の学習を表示')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <h5 class="title">{{ \Carbon\Carbon::now()->format("Y年m月d日") }}</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">学習内容</th>
                    <th scope="col">今日の学習時間</th>
                    <th scope="col"></th>
                </tr>
            </thead>

        <tbody>
        @foreach($studyrecords as $studyrecord)
        <tr>
            <th scope="row"><i class="fas fa-book size color"></i>　{{ $studyrecord->item->item}}</th>
            <th scope="row">{{ $studyrecord->time }}分</th>
        </tr>
        @endforeach
    </tbody>
    </table>
        <div class="card-memo">
            {{ $record->memo }}
        </div>
    </div>
</div>
<div class="btn-mypage">
    <a href="/home" class="btn btn-home">マイページに戻る</a>
</div>
@include('foot')
@endsection
