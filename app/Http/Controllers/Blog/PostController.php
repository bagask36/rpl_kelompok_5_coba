<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $latest_post = Article::latest()->first();

        $articles = Article::where('id', '!=', $latest_post->id)->latest()->paginate(6);

        $categories = Category::all();

        return view('blog.layout.article.main', [
            'latest_post' => $latest_post,
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
}
