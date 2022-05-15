<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="mx-auto px-4 p-4 shadow-lg navbar">
        <div class="container mx-auto flex justify-between items-center">
            <h4 class="text-2xl font-bold">
                <a href="/">Blog Post</a>
            </h4>
            <div class="flex items-center justify-center gap-4">
                @if (Auth::check())
                    <div class="dropdown">
                        <div class="username">
                            <span>{{ Auth::user()->name }}</span>
                            <i class="fa-solid fa-angle-down"></i>
                        </div>
                        <div class="dropdown-box">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                @method("POST")
                                <button type="submit">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('register') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Register</a>
                    <a href="{{ route('login') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</a>
                @endif
                
            </div>
        </div>
    </nav>

    <div class="menu container mx-auto p-2 mt-5">
        <a href="/" class="{{ Request::is('/')?"all active":"all" }}">All</a>
        <a href="{{ route('category.index') }}" class="{{ Request::is('category') || Request::is('category/*')?"category active":"category" }}">Category</a>
        <a href="{{ route('post.index') }}" class="{{ Request::is('post') || Request::is('post/*')?"post active":"post" }}">Post</a>
    </div>

    @yield('content')

</body>
<script src="{{ asset('js/navbar.js') }}"></script>
</html>