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
                ->paginate(7)
                ->withQueryString(),
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Post',
            'active' => 'posts',
            'post' => $post,
        ]);
    }
}
