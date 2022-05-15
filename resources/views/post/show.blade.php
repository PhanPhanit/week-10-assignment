@extends('master')

@section('title')
Category
@endsection()

@section('content')
<div class="container mx-auto mt-5 p-2">
    <div style="font-weight: bold;font-size: 22px">
        <span>Post ID: </span>
        <span>{{ $post->id }}</span>
    </div>
    <div style="font-weight: bold;font-size: 22px">
        <span>Post Title: </span>
        <span>{{ $post->title }}</span>
    </div>
    <div style="font-weight: bold;font-size: 22px">
        <span>Category: </span>
        <span>{{ $post->category->name }}</span>
    </div>
</div>
@endsection