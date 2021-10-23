@extends('app')

@section('title','studyaid | 学習内容の追加')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    @include('error_card_list')
    <div class="card-body">
        <div class="title">学習内容の追加</div>
        <br>
        <form action="{{ route('setup.store') }}" method="post">
            <div class="form-outline mb-4">
                    @csrf
                <input type="text" name="item" class="form-control" />
            </div>
            <div class="btn-mypage">
                <button type="submit" value="send" class="btn btn-post">学習内容を追加する</button>
            </div>
        </form>

        <div class="btn-mypage">
            <a href="/home" class="btn btn-home">マイページに戻る</a>
        </div>

    </div>
</div>
@include('foot')
@endsection
