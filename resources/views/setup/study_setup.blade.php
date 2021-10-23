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
            <tr class="item-list">
                <td><i class="fas fa-book size color"></i>　{{ $item->item }}</td>
                <td><a href="{{ route('setup.show',$item->id) }}" class="edit-btn">編集</a></td>
                <td><form action="{{ route('setup.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-btn" name="delete"><i class="fas fa-trash-alt"></i> 削除</button>
                </form></td>
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
@include('foot')
@endsection
