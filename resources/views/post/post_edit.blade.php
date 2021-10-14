@extends('app')

@section('title','studyaid | 記事編集')

@section('content')
@include('nav')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body pt-0">
                    <div class="card-text">
                        <form method="POST" action="{{ route('post.update', ['post' => $post]) }}">
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                            <label></label>

                            @if(isset($studies))

                            <div class="card-body pt-0 pb-2">
                            <ul class="list-group list-group-flush">
                            @foreach( $studies as $study )
                                <input type="hidden" name="studyid[]" value="{{ $study->id }}" />
                                <li class="list-group-item">・{{ $study->item->item }}</li>
                                <input type="text" name="time[]" class="form-control" value="{{ $study->time }}" />
                            @endforeach
                            </ul>
                            </div>

                            @endif

                            <textarea name="memo" required class="form-control" rows="16" placeholder="本文">{{ $post->memo }}
                            </textarea>
                            </div>
                            <button type="submit" class="btn blue-gradient btn-block">編集</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
