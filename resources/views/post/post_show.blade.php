@extends('app')
@inject('form','App\Post\PostForm')

@section('title','studyaid | 投稿')

@section('content')
    @include('nav')

<div class="container post-show">
    <div class="card post-card">
        <div class="card-header font-weight-bold post-header d-flex flex-row align-items-center">
            <i class="fas fa-user-circle"></i> {{ $post->user->getData() }}/{{ $post->created_at->format('Y/m/d H:i') }}
        </div>

        @if($studies)
        <div class="card-body">
            <ul class="defaultlist list4">
            @foreach( $studies as $study )
                <li>{{ $study->item->item }}　-　{{ $study->time }}分</li>
            @endforeach
            </ul>
        </div>
        @endif

        <div class="card-footer post-footer">
            {!! nl2br(e($post->memo)) !!}
        </div>
            @include('post.comment.post_comment')
    </div>

    <div class="btn-mypage">
        <a href="/home" class="btn btn-home">マイページに戻る</a>
    </div>
</div>
    @include('foot')

@endsection
