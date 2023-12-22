<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
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
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            'title' => 'All Posts' . $title,
            'active' => 'posts',
            'posts' => Post::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(8)
                ->withQueryString(),
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
