@extends('app')

@section('title','studyaid | 投稿作成')

@section('content')
@include('nav')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body pt-0">
                @include('error_card_list')
                    <div class="card-text">
                    <form method="POST" action="{{ route('post.store') }}">
                        @csrf
                        <div class="form-group">
                        <label></label>
                        <textarea name="body" required class="form-control" rows="16" placeholder="ここに本文を入力してね">{{ old('body') }}</textarea>
                        </div>
                        <div class="btn-mypage">
                        <button type="submit" class="btn btn-post">投稿</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <div class="btn-mypage">
        <a href="/home" class="btn btn-home">マイページに戻る</a>
    </div>
</div>
@include('foot')
@endsection
