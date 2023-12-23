<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPostCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.post-categories.index', [
            'postCategories' => PostCategory::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.post-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:64',
            'slug' => 'required|unique:post_categories',
            'deskripsi' => 'required'
        ]);

        PostCategory::create($validatedData);

        return redirect('/dashboard/posts-categories')->with('success', 'Kategori artikel baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PostCategory $postCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostCategory $postCategory, Request $request)
    {
        // dd($postCategory);
        return view('dashboard.post-categories.edit', [
            'postCategory' => $postCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostCategory $postCategory)
    {
        $rules = [
            'name' => 'required|max:64',
            'deskripsi' => 'required'
        ];

        if ($request->slug != $postCategory->slug) {
            $rules['slug'] = 'required|unique:post_categories';
        }

        $validatedData = $request->validate($rules);



        PostCategory::where('id', $postCategory->id)->update($validatedData);

        return redirect('/dashboard/posts-categories')->with('success', 'Kategori artikel berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostCategory $postCategory, Request $request)
    {
        PostCategory::destroy($postCategory->id);

        return redirect('/dashboard/posts-categories')->with('success', 'Kategori artikel berhasil dihapus!');
    }
}
