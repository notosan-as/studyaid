@extends('app')

@section('title','studyaid | 投稿作成')

@section('content')
@include('nav')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body pt-0">
                    <div class="card-text">
                    <form method="POST" action="{{ route('post.store') }}">
                        @csrf
                        <div class="form-group">
                        <label></label>
                        <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ old('body') }}</textarea>
                        </div>
                        <button type="submit" class="btn blue-gradient btn-block">投稿</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="/home" class="btn btn-primary">マイページに戻る</a>
</div>
@endsection
