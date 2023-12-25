<?php

namespace App\Http\Controllers;

use App\Models\PaketCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPaketCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.paket-categories.index', [
            'paketCategories' => PaketCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.paket-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:64',
            'slug' => 'required|unique:paket_categories|regex:/^[a-zA-Z0-9]+$/'
        ]);

        PaketCategory::create($validatedData);

        return redirect('/dashboard/paket-categories')->with('success', 'Kategori paket baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PaketCategory $paketCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PaketCategory $paketCategory)
    {
        return view('dashboard.paket-categories.edit', [
            'paketCategory' => $paketCategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaketCategory $paketCategory)
    {
        $rules = [
            'name' => 'required|max:64'
        ];

        if ($request->slug != $paketCategory->slug) {
            $rules['slug'] = 'required|unique:paket_categories|regex:/^[a-zA-Z0-9]+$/';
        }

        $validatedData = $request->validate($rules);

        PaketCategory::where('id', $paketCategory->id)->update($validatedData);

        return redirect('/dashboard/paket-categories')->with('success', 'Kategori paket berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaketCategory $paketCategory)
    {
        PaketCategory::destroy($paketCategory->id);

        return redirect('/dashboard/paket-categories')->with('success', 'Kategori paket berhasil dihapus!');
    }
}
