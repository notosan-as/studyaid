@extends('app')

@section('title','studyaid | 学習内容の追加')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <h5 class="card-title">学習内容の追加</h5>
        <form action="{{ route('setup.store') }}" method="post">
            <div class="form-outline mb-4">
                @csrf
            <input type="text" name="item" class="form-control" />
            </div>

            <button type="submit" value="send" class="btn btn-primary btn-block mb-4">学習内容を追加する</button>
        </form>

        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="/home" class="btn btn-primary">マイページに戻る</a>
        </div>

    </div>
</div>
@endsection
