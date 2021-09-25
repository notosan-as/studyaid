@extends('app')

@section('title','studyaid | 今日の学習を登録')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <h5 class="card-title">今日の日付</h5>
        @foreach($items as $item)
        <p class="card-text">
        {{ $item->item }}
        </p>
        @endforeach
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="/home" class="btn btn-primary">マイページに戻る</a>
</div>
@endsection
