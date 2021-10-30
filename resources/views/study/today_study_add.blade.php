@extends('app')

@section('title','studyaid | 今日の学習を登録')

@section('content')
@include('nav')
    <form method="post" action="{{ route('study.store') }}">
    @csrf
<div class="card w-75 m-3 mx-auto">
    @include('error_card_list')
    <div class="card-body">
        <h5 class="title">{{ \Carbon\Carbon::now()->format("Y年m月d日") }}</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">　　学習内容</th>
                    <th scope="col">今日の学習時間</th>
                </tr>
            </thead>
        <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row"><i class="fas fa-book size color"></i>　{{ $item->item }}</th>
            <input type="hidden" name="itemid[]" value="{{ $item->id }}">
            <th><input type="text" name="time[]" value="{{ $item['time'] }}" class="form-control input-time">分</th>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <div class="form-outline mb-4">
            <label class="form-label" for="form4Example3">メモ</label>
            <textarea class="form-control" name="memo" rows="4"></textarea>
        </div>
        <div class="btn-mypage">
        <button type="submit" value="send" class="btn btn-post">学習内容の投稿</button>
        </div>
    </div>
</div>
</form>
<div class="btn-mypage">
    <a href="/home" class="btn btn-home">マイページに戻る</a>
</div>
@include('foot')
@endsection
