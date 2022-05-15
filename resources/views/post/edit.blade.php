<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Category</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-blue-50">
    <div class="mx-auto p-2 mt-8" style="width: 600px;">
        <div class="block p-6 rounded-lg shadow-lg bg-white">
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form action="{{ route('post.update', ['post' => $post->id]) }}" method="POST" class="mt-2">
                @csrf
                @method('PUT')
              <div class="form-group mb-6">
                <div>
                  <label for="title" class="form-label inline-block mb-1 text-gray-700">Title</label>
                  <input type="text" name="title" value="{{ $post->title }}" class="form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="title"
                    aria-describedby="emailHelp" placeholder="title">
                </div>
                <div class="mt-2">
                  <label for="category" class="form-label inline-block mb-1 text-gray-700">Category</label>
                  <select name="category" id="category" class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                    <option value="">----- Select Category -----</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category_id==$category->id?"selected":"" }}>{{ $category->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="mt-2">
                  <label for="category" class="form-label inline-block mb-1 text-gray-700">Category</label>
                  <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" class="form-control
                  block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">{{ $post->description }}</textarea>
                </div>
              </div>
              <button type="submit" class="
                w-full
                px-6
                py-2.5
                bg-blue-600
                text-white
                font-medium
                text-xs
                leading-tight
                uppercase
                rounded
                shadow-md
                hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-blue-800 active:shadow-lg
                transition
                duration-150
                ease-in-out">Create</button>
            </form>
          </div>
    </div>
</body>
</html>