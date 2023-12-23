<?php

use App\Models\Post;
use App\Models\Sarana;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardSaranaController;
use App\Http\Controllers\DashboardAllPostController;
use App\Http\Controllers\DashboardCommentController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardAllCommentController;
use App\Http\Controllers\DashboardPostCategoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('home', [
        'title' => 'Home',
        'active' => 'home',
        'posts' => Post::latest()->take(2)->get(),
        'saranas' => Sarana::latest()->take(4)->get()
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/sarana', [SaranaController::class, 'index']);

Route::get('/paket', function () {
    return view('paket', [
        'title' => 'Paket Upacara',
        'active' => 'paket',
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource(
    '/dashboard/profile',
    DashboardProfileController::class
)->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/all-posts', DashboardAllPostController::class)->middleware('admin');
Route::resource('/dashboard/sarana', DashboardSaranaController::class)->middleware('admin');
Route::resource('/dashboard/comments', DashboardCommentController::class)->middleware('auth');
// Route::delete('/dashboard/comments/{comment}', [DashboardCommentController::class, 'destroy'])->middleware('auth');
Route::resource('/dashboard/all-comments', DashboardAllCommentController::class)->middleware('admin');
// Route::delete('/dashboard/all-comments/{comment}', [DashboardAllCommentController::class, 'destroy'])->middleware('auth');

// Route::resource('/dashboard/posts-categories', DashboardPostCategoriesController::class)->middleware('admin');
Route::get('/dashboard/posts-categories', [DashboardPostCategoriesController::class, 'index'])->middleware('admin');
Route::get('/dashboard/posts-categories/create', [DashboardPostCategoriesController::class, 'create'])->middleware('admin');
Route::post('/dashboard/posts-categories', [DashboardPostCategoriesController::class, 'store'])->middleware('admin');
Route::get('/dashboard/posts-categories/{postCategory}/edit', [DashboardPostCategoriesController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/posts-categories/{postCategory}', [DashboardPostCategoriesController::class, 'update'])->middleware('admin');
Route::delete('/dashboard/posts-categories/{postCategory}', [DashboardPostCategoriesController::class, 'destroy'])->middleware('admin');

// Route::middleware(['admin'])->group(function () {
//     Route::resource('/dashboard/posts-categories', DashboardPostCategoriesController::class);
// });

Route::post('/posts/comment', [CommentController::class, 'store']);

// Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
// Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
// Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Route::get('/sarana/{sarana:slug}', function () {
//     return view('summary', [
//         'title' => 'Summary',
//         'active' => 'sarana',
//     ]);
// });