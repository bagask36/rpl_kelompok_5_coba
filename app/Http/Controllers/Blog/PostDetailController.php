<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class PostDetailController extends Controller
{
    public function show($id)
    {
        $post = Article::findOrFail($id);
        return view('blog.layout.article.postdetail', compact('post'));
    }
}
