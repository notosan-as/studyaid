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
                            <textarea name="body" required class="form-control" rows="16" placeholder="本文">{{ $post->memo }}
                            </textarea>
                            </div>
                            <button type="submit" class="btn blue-gradient btn-block">更新</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
