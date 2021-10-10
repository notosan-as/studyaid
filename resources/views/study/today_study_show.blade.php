@extends('app')

@section('title','studyaid | 今日の学習を表示')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <h5 class="card-title">{{ \Carbon\Carbon::now()->format("Y年m月d日") }}</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">学習内容</th>
                    <th scope="col">学習時間</th>
                    <th scope="col"></th>
                </tr>
            </thead>

        <tbody>
        @foreach($studyrecords as $studyrecord)
        <tr>
            <th scope="row">{{ $studyrecord->item_id }}</th>
            <th scope="row">{{ $studyrecord->time }}</th>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="/home" class="btn btn-primary">マイページに戻る</a>
</div>
@endsection
