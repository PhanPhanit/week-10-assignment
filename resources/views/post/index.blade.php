@extends('master')

@section('title')
Post
@endsection

@section('content')
<div class="post-container container mx-auto mt-5 p-2">
    <div class="title">
        <div class="flex justify-between">
            <h2>Post</h2>
            <a href="{{ route('post.create') }}">Create</a>
        </div>
        <hr>
    </div>
    <div class="post">
        @foreach ($posts as $post)
            <div class="box">
                <div class="left">
                    <div>
                        <span>Title: </span> <a href="{{ route('post.show', ['post'=>$post->id]) }}" class="name">{{ $post->title }}</a>
                    </div>
                    <div>
                        <span>Category: </span> <a href="{{ route('category.show', ['category'=>$post->category->id]) }}" class="name">{{ $post->category->name }}</a>
                    </div>
                    <div>
                        <span>Description: </span> <a href="{{ route('post.show', ['post'=>$post->id]) }}" class="name">{{ $post->description }}</a>
                    </div>
                </div>
                <div class="right">
                    @if (isset(Auth::user()->id) && (Auth::user()->role == 'admin' || Auth::user()->id==$post->user_id))
                        <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="btn-edit">Edit</a>
                        <span>|</span>
                        <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Delete</button>
                        </form>
                    @endif
                
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination mt-5">
        {{ $posts->links() }}
    </div>
</div>
@endsection