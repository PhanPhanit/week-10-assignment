@extends('master')

@section('title')
Home
@endsection

@section('content')
<div class="all-container container mx-auto mt-5 p-2">
    <div class="title">
        <h2>Category</h2>
        <hr>
    </div>
    <div class="category-box">
        @foreach ($categories as $category)
            <div class="box">
                <a href="{{ route('category.show', ['category'=>$category->id]) }}">{{ $category->name }}</a>
            </div>
        @endforeach
    </div>
    <div class="title mt-5">
        <h2>Post</h2>
        <hr>
    </div>
    <div class="post-box">
        @foreach ($posts as $post)
            <div class="box">
                <div>
                    <div>
                        <span>Name: </span> <a href="{{ route('post.show', ['post' => $post->id]) }}" class="name">{{ $post->title }}</a>
                    </div>
                    <div>
                        <span>Category: </span> <a href="{{ route('category.show', ['category' => $post->category->id]) }}" class="name">{{ $post->category->name }}</a>
                    </div>
                    <div>
                        <span>Description: </span> <a href="{{ route('post.show', ['post' => $post->id]) }}" class="name">{{ $post->description }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    
</div>
@endsection