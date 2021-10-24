@extends('app')

@section('title','studyaid | 記事編集')

@section('content')
@include('nav')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body pt-0">
                @include('error_card_list')
                    <div class="card-text">
                        <form method="POST" action="{{ route('post.update', ['post' => $post]) }}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                            <label></label>

                            @if(isset($studies))

                            <div class="card-body pt-0 pb-2">
                            <ul class="list-group study-list">

                            @foreach( $studies as $study )
                                <input type="hidden" name="studyid[]" value="{{ $study->id }}" />
                                <li>　　<i class="fas fa-book size color"></i>{{ $study->item->item }}</li>
                                <li><input type="number" name="time[]" class="form-control input-time" value="{{ $study->time }}" />分　　/</li>
                            @endforeach

                            </ul>
                            </div>

                            @endif

                            <textarea name="memo" required class="form-control" rows="16" placeholder="本文">{{ $post->memo }}
                            </textarea>
                            </div>
                            <div class="btn-mypage">
                            <button type="submit" class="btn btn-post">編集</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('foot')
@endsection
