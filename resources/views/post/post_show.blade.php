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

    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="{{ route('post.create') }}" class="btn btn-primary">投稿する</a>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="/home" class="btn btn-primary">マイページに戻る</a>
    </div>
@endsection
