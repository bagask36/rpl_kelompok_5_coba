<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;
use App\Models\PelaporanPph21;

class DashboardController extends Controller
{
    public function index() {
        return view('back.dashboard.index', [
            'total_categories'  => Category::count(),
            'total_articles'    => Article::count(),
        ]);
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin'); // Middleware to ensure only admin can access
    }
}

