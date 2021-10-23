@extends('app')
@inject('form','App\Post\PostForm')

@section('title','studyaid | 投稿')

@section('content')
    @include('nav')

<div class="container">

    <!-- 学習時間の投稿があるか判定 -->
    @if( in_array ( $post->id, array_column( $records, 'record_id' )))
        @include('post.post_form.form_time')
    @else
        @include('post.post_form.form_only')
    @endif

</div>

    <div class="btn-mypage">
        <a href="{{ route('post.create') }}" class="btn btn-post">投稿する</a>
    </div>
    <div class="btn-mypage">
        <a href="/home" class="btn btn-home">マイページに戻る</a>
    </div>
    @include('foot')
@endsection
