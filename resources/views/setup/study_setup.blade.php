@extends('app')

@section('title','studyaid | 学習内容の設定')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <div class="title">学習内容の設定</div>
        <table class="table">
        <thead>
        <tr>
            <th scope="col">　　科目名</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td><i class="fas fa-book size color"></i>　{{ $item->item }}</td>
                <td><a href="{{ route('setup.show',$item->id) }}" class="btn edit-btn">編集</a></td>
                <td><form action="{{ route('setup.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="delete" value="削除" class="btn delete-btn"></form></td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
<div class="btn-mypage">
    <a href="{{ route('setup.create') }}" class="btn btn-post">学習内容を追加する</a>
    <a href="/home" class="btn btn-home">マイページに戻る</a>
</div>
@endsection
