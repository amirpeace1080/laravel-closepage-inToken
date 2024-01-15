<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Blog::all();
        return $posts;
    }
}
