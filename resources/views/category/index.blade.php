@extends('master')

@section('content')
<div class="category-container container mx-auto mt-5 p-2">
    <div class="title">
        <div class="flex justify-between">
            <h2>Category</h2>
            <a href="{{ route('category.create') }}">Create</a>
        </div>
        <hr>
    </div>
    <div class="category">
        @foreach ($categories as $category)
            <div class="box">
                <div class="left">
                    <a href="{{ route('category.show', ['category' => $category->id]) }}">{{ $category->name }}</a>
                </div>
                <div class="right">
                    @if (isset(Auth::user()->id) && (Auth::user()->role == 'admin' || Auth::user()->id==$category->user_id))
                        <a href="{{ route('category.edit', ['category'=>$category->id]) }}" class="btn-edit">Edit</a>
                        <span>|</span>
                        <form action="{{ route('category.destroy', ['category'=>$category->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Delete</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection