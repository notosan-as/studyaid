@extends('app')

@section('title','studyaid | みんなの投稿')

@section('content')
    @include('nav')

<div class="container">
@foreach($posts as $post)

    <!-- メモだけの投稿かどうか判定 -->
    @if(in_array($post->id, (array)$records,true))
        @include('post.post_form.form_time')
        ある時
    @endif
        @include('post.post_form.form_only')
        ないとき

@endforeach
</div>

    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="{{ route('post.create') }}" class="btn btn-primary">投稿する</a>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="/home" class="btn btn-primary">マイページに戻る</a>
    </div>
@endsection
