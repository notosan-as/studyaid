@extends('app')

@section('title','studyaid | 学習内容の編集')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    @include('error_card_list')
    <div class="card-body">
        <div class="title">学習内容の編集</div>
        <br>
        <form action="{{ route('setup.update',$items->id) }}" method="post">
            <div class="form-outline mb-4">
                    @csrf
                    @method('PUT')
                <input type="text" name="item" class="form-control" value="{{ $items->item }}" />
            </div>
            <div class="btn-mypage">
                <button type="submit" value="send" class="btn btn-post">学習内容を編集する</button>
            </div>
        </form>
        <div class="btn-mypage">
            <a href="/home" class="btn btn-home">マイページに戻る</a>
        </div>

    </div>
</div>
@include('foot')
@endsection
