<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Usaha;
use Illuminate\Http\Request;
use App\Models\PaketCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.paket.index', [
            'pakets' => Paket::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.paket.create', [
            'usahas' => Usaha::all(),
            'categories' => PaketCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'usaha_id' => 'required',
            'category_id' => 'required',
            'nama_paket' => 'required|max:64',
            'slug' => 'required|unique:pakets',
            'harga' => 'required',
            'deskripsi' => 'required',
            'includes' => 'required',
            'notes' => 'required',
            'image' => 'image|file|max:2048',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('paket-images');
        }

        Paket::create($validatedData);

        return redirect('/dashboard/paket')->with('success', 'Paket baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paket $paket)
    {
        $arrayIncludes = explode(';', $paket->includes);
        $arrayIncludes = array_map('trim', $arrayIncludes);
        $arrayIncludes = array_filter($arrayIncludes);

        $arrayNotes = explode(';', $paket->notes);
        $arrayNotes = array_map('trim', $arrayNotes);
        $arrayNotes = array_filter($arrayNotes);

        return view('dashboard.paket.show', [
            'paket' => $paket,
            'usahas' => Usaha::all(),
            'categories' => PaketCategory::all(),
            'includes' => $arrayIncludes,
            'notes' => $arrayNotes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paket $paket)
    {
        return view('dashboard.paket.edit', [
            'paket' => $paket,
            'usahas' => Usaha::all(),
            'categories' => PaketCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Paket $paket)
    {
        $rules = [
            'usaha_id' => 'required',
            'category_id' => 'required',
            'nama_paket' => 'required|max:64',
            'harga' => 'required',
            'deskripsi' => 'required',
            'includes' => 'required',
            'notes' => 'required',
        ];

        if ($request->slug != $paket->slug) {
            $rules['slug'] = 'required|unique:pakets';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('paket-images');
        }

        Paket::where('id', $paket->id)->update($validatedData);

        return redirect('/dashboard/paket')->with('success', 'Paket baru berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paket $paket)
    {
        if ($paket->image) {
            Storage::delete($paket->image);
        }

        Paket::destroy($paket->id);

        return redirect('/dashboard/paket')->with('success', 'Paket berhasil dihapus!');
    }
}
