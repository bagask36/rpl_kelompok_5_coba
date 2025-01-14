<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\UserDashboardController;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\PostDetailController;
use App\Models\TaxReport;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Middleware untuk pengguna yang sudah login
Route::middleware(['auth'])->group(function () {

    // Route untuk Admin
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('/admin/categories', CategoryController::class);
        Route::resource('/admin/articles', ArticleController::class);
    });

});


// Route umum
Route::get('/', function () {
    return view('blog.layout.home.main');
});
Route::get('/kontak-kami', function () {
    return view('blog.layout.contact.main');
});
Route::get('/beranda', function () {
    return view('blog.layout.home.main');
});
Route::get('/berita_artikel', [PostController::class, 'index'])->name('article.main');
Route::get('/post/{id}', [PostDetailController::class, 'show'])->name('article.postdetail');
Route::get('/tentang-kami', function () {
    return view('blog.layout.aboutus.main');
});
Route::get('/tentang-kami/pelayanan-kami', function () {
    return view('blog.layout.services.main');
});
Route::get('/peraturan-undang-undang', function () {
    return view('blog.layout.uu.main');
});
Route::get('/peraturan-dan-keputusan', function () {
    return view('blog.layout.keputusan.main');
});
Route::get('/peraturan-lain-lain', function () {
    return view('blog.layout.lain.main');
});
