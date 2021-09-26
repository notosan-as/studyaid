@extends('app')

@section('title','studyaid | 今日の学習を登録')

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

        <form action="{{ route('study.store') }}" method="POST">
        <tbody>
        @foreach($items as $item)
        <tr>
            <th scope="row">{{ $item->item }}</th>
            <td>
            <input type="text" name="" class="form-control">時間
            </td>
            <td>
            <input type="text" name="" class="form-control">分
            </td>
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
</div>
</div>
    <button type="submit" class="btn btn-primary btn-block mb-4">学習内容の投稿</button>
</form>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="/home" class="btn btn-primary">マイページに戻る</a>
</div>
@endsection
