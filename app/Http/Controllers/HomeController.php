<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        $categories = Category::orderBy('created_at', 'DESC')->take(3)->get();
        $posts = Post::orderBy('created_at', 'DESC')->take(5)->get();
        return view('index', [
            'categories' => $categories,
            'posts' => $posts
        ]);
    }
}
