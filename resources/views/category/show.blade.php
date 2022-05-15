@extends('master')

@section('title')
Category
@endsection()

@section('content')
<div class="container mx-auto mt-5 p-2">
    <div style="font-weight: bold;font-size: 22px">
        <span>Category ID: </span>
        <span>{{ $category->id }}</span>
    </div>
    <div style="font-weight: bold;font-size: 22px">
        <span>Category Name: </span>
        <span>{{ $category->name }}</span>
    </div>
</div>
@endsection