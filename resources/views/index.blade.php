@extends('app')

@section('title','studyaid | index')

@section('content')
@include('nav')
index
@foreach($records as $record)
{{$record->user->name}}
@endforeach
