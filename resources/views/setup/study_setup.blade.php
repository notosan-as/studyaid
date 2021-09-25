@extends('app')

@section('title','studyaid | 学習内容の設定')

@section('content')
@include('nav')
<div class="card w-75 m-3 mx-auto">
    <div class="card-body">
        <h5 class="card-title">学習内容の設定</h5>
        <table class="table">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">科目名</th>
            <th scope="col">修正</th>
            <th scope="col">削除</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->item }}</td>
                <td><a href="{{ route('setup.show',$item->id) }}" class="btn btn-primary">編集</a></td>
                <td><form action="{{ route('setup.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="delete" value="削除" class="btn btn-primary"></form></td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <a href="{{ route('setup.create') }}" class="btn btn-primary">学習内容を追加する</a>
    <a href="/home" class="btn btn-primary">マイページに戻る</a>
</div>
@endsection
