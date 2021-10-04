@extends('app')

@section('title','studyaid | みんなの投稿')

@section('content')
@include('nav')
<div class="container">
    @foreach($posts as $post)
    <div class="card mt-3">
        <div class="card-body d-flex flex-row">
            <i class="fas fa-user-circle fa-3x mr-1"></i>
                <div>
                    <div class="font-weight-bold">
                    {{ $post->user->getData() }}
                    </div>
                    <div class="font-weight-lighter">
                    {{ $post->created_at->format('Y/m/d H:i') }}
                    </div>
                </div>

                @if( Auth::id() === $post->user_id )
                <!-- dropdown -->
                <div class="ml-auto card-text">
                    <div class="dropdown">
                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button type="button" class="btn btn-link text-muted m-0 p-2">
                        <i class="fas fa-ellipsis-v"></i>
                        </button></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('post.edit', ['post' => $post]) }}">
                            <i class="fas fa-pen mr-1"></i>記事を更新する</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $post->id }}">
                            <i class="fas fa-trash-alt mr-1"></i>記事を削除する</a>
                        </div>
                    </div>
                </div>
                <!-- dropdown -->

                <!-- modal -->
                <div id="modal-delete-{{ $post->id }}" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('post.destroy', ['post' => $post]) }}">
                        @csrf
                        @method('DELETE')
                        <div class="modal-body">
                            削除します。よろしいですか？
                        </div>
                        <div class="modal-footer justify-content-between">
                            <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                            <button type="submit" class="btn btn-danger">削除</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- modal -->
            @endif
        </div>
        <div class="card-body pt-0 pb-2">
            <div class="card-text">
                {!! nl2br(e($post->memo)) !!}
                {{ $post->id }}
            </div>
        </div>
        <div class="card-body pt-0 pb-2 pl-3">
            <div class="card-text">
            <post-like
            :initial-is-liked-by='@json($post->isLikedBy(Auth::user()))'
            :initial-count-likes='@json($post->count_likes)'
            :authorized='@json(Auth::check())'
            endpoint="{{ route('post.like', ['post' => $post]) }}">
            </post-like>
            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="{{ route('post.create') }}" class="btn btn-primary">投稿する</a>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="/home" class="btn btn-primary">マイページに戻る</a>
</div>
@endsection
