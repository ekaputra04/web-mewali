<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Paket;
use App\Models\Usaha;
use App\Models\Sarana;
use App\Models\Comment;
use App\Models\PaketCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DetailPaketController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardPaketController;
use App\Http\Controllers\DashboardUsahaController;
use App\Http\Controllers\DashboardSaranaController;
use App\Http\Controllers\DashboardAllPostController;
use App\Http\Controllers\DashboardCommentController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardProfileController;
use App\Http\Controllers\DashboardAllCommentController;
use App\Http\Controllers\DashboardPaketCategoryController;
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
        'paketCategories' => PaketCategory::all(),
        'posts' => Post::latest()->take(2)->get(),
        'saranas' => Sarana::latest()->take(4)->get(),
        'pakets' => Paket::latest()->take(4)->get()
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/paket', [PaketController::class, 'index']);
Route::get('/paket/{paket:slug}', [PaketController::class, 'show']);

Route::post('/posts/comment', [CommentController::class, 'store']);
Route::get('/sarana', [SaranaController::class, 'index']);

Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'active' => 'about',
        'paketCategories' => PaketCategory::all()
    ]);
});

Route::post('/contact', [ContactController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// user dashboard
Route::get('/dashboard', function () {
    $user = Auth::user();
    $jumlahArtikelUser = Post::where('user_id', $user->id)->count();
    $jumlahKomentarUser = Comment::join('posts', 'comments.post_id', '=', 'posts.id')
        ->where('posts.user_id', $user->id)
        ->count();
    $jumlahPengguna = User::count();
    $jumlahUsaha = Usaha::count();
    $jumlahArtikel = Post::count();
    $jumlahKomentar = Comment::count();
    $jumlahSarana = Sarana::count();
    $jumlahPaket = Paket::count();

    return view('dashboard.index', [
        'jumlahArtikelUser' => $jumlahArtikelUser,
        'jumlahKomentarUser' => $jumlahKomentarUser,
        'jumlahPengguna' => $jumlahPengguna,
        'jumlahUsaha' => $jumlahUsaha,
        'jumlahArtikel' => $jumlahArtikel,
        'jumlahKomentar' => $jumlahKomentar,
        'jumlahSarana' => $jumlahSarana,
        'jumlahPaket' => $jumlahPaket,
    ]);
})->middleware('auth');

Route::resource('/dashboard/users', DashboardUserController::class)->middleware('admin');
Route::resource('/dashboard/usaha', DashboardUsahaController::class)->middleware('admin');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/comments', DashboardCommentController::class)->middleware('auth');
Route::resource(
    '/dashboard/profile',
    DashboardProfileController::class
)->middleware('auth');

// administrator dashboard
Route::get('/dashboard/all-posts', [DashboardAllPostController::class, 'index'])->middleware('admin');
Route::post('/dashboard/all-posts', [DashboardAllPostController::class, 'store'])->middleware('admin');
Route::get('/dashboard/all-posts/{post}', [DashboardAllPostController::class, 'show'])->middleware('admin');
Route::get('/dashboard/all-posts/{post}/edit', [DashboardAllPostController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/all-posts/{post}', [DashboardAllPostController::class, 'update'])->middleware('admin');
Route::delete('/dashboard/all-posts/{post}', [DashboardAllPostController::class, 'destroy'])->middleware('admin');

Route::resource('/dashboard/all-comments', DashboardAllCommentController::class)->middleware('admin');
Route::resource('/dashboard/paket', DashboardPaketController::class)->middleware('admin');
Route::resource('/dashboard/paket-categories', DashboardPaketCategoryController::class)->middleware('admin');

Route::resource('/dashboard/sarana', DashboardSaranaController::class)->middleware('admin');
Route::resource('/dashboard/contact', DashboardContactController::class)->middleware('admin');

Route::get('/dashboard/posts-categories', [DashboardPostCategoriesController::class, 'index'])->middleware('admin');
Route::get('/dashboard/posts-categories/create', [DashboardPostCategoriesController::class, 'create'])->middleware('admin');
Route::post('/dashboard/posts-categories', [DashboardPostCategoriesController::class, 'store'])->middleware('admin');
Route::get('/dashboard/posts-categories/{postCategory}/edit', [DashboardPostCategoriesController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/posts-categories/{postCategory}', [DashboardPostCategoriesController::class, 'update'])->middleware('admin');
Route::delete('/dashboard/posts-categories/{postCategory}', [DashboardPostCategoriesController::class, 'destroy'])->middleware('admin');
