<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use App\Models\PaketCategory;
use App\Http\Controllers\Controller;
// use Illuminate\Tests\Integration\Database\Fixtures\Post;

class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'));
        $title = '';
        if (request('category')) {
            $category = PostCategory::firstWhere('slug', request('category'));
            $title = 'Kategori ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = 'Oleh ' . $author->name;
        }

        return view('posts', [
            'title' => 'Artikel' . $title,
            'active' => 'posts',
            'paketCategories' => PaketCategory::all(),
            'posts' => Post::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(8)
                ->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        $olderPost = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('created_at', '<', $post->created_at)
            ->orderBy('created_at', 'desc')
            ->first();

        $older = $olderPost ? $olderPost->slug : null;

        $newerPost = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('created_at', '>', $post->created_at)
            ->orderBy('created_at', 'asc')
            ->first();

        $newer = $newerPost ? $newerPost->slug : null;

        return view('post', [
            'title' => 'Post',
            'active' => 'posts',
            'paketCategories' => PaketCategory::all(),
            'post' => $post,
            'posts' => Post::latest()
                ->where('category_id', $post->category_id)
                ->where('id', '!=', $post->id)
                ->filter(request(['search', 'category', 'author']))
                ->paginate(8)
                ->withQueryString(),
            'older_slug' => $older,
            'newer_slug' => $newer,
        ]);
    }
}
