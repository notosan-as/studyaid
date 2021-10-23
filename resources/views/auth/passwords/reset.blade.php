@extends('app')

@section('title', 'Studyaid | パスワード再設定')

@section('content')
@include('nav')

<div class="container">
    <div class="row">
    <div class="mx-auto col col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
        <div class="card mt-3">
        <div class="card-body text-center">
            <div class="title">新しいパスワードを設定</div>

            @include('error_card_list')

            <div class="card-text">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="md-form">
                <label for="password">新しいパスワード</label>
                <input class="form-control" type="password" id="password" name="password" required>
                </div>

                <div class="md-form">
                <label for="password_confirmation">新しいパスワード(再入力)</label>
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
                </div>

                <button class="btn btn-post" type="submit">送信</button>

            </form>

            </div>
        </div>
        </div>
        </div>
    </div>
</div>
@include('foot')
@endsection
