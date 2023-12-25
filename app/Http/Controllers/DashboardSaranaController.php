<?php

namespace App\Http\Controllers;

use App\Models\Usaha;
use App\Models\Sarana;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardSaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.sarana.index', [
            'sarana' => Sarana::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.sarana.create', [
            'usahas' => Usaha::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'usaha_id' => 'required',
            'nama_sarana' => 'required|max:64',
            'slug' => 'required|unique:saranas',
            'harga' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|file|max:2048',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('sarana-images');
        }

        Sarana::create($validatedData);

        return redirect('/dashboard/sarana')->with('success', 'Sarana baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sarana $sarana)
    {
        return view('dashboard.sarana.show', [
            'sarana' => $sarana,
            'usahas' => Usaha::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sarana $sarana)
    {
        return view('dashboard.sarana.edit', [
            'sarana' => $sarana,
            'usahas' => Usaha::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sarana $sarana)
    {
        $rules = [
            'usaha_id' => 'required',
            'category_' => 'required',
            'nama_sarana' => 'required|max:255',
            'harga' => 'required',
            'deskripsi' => 'required',
        ];

        if ($request->slug != $sarana->slug) {
            $rules['slug'] = 'required|unique:saranas';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('sarana-images');
        }

        $validatedData['deskripsi_singkat'] = Str::limit(strip_tags($request->deskripsi), 30, '...');

        Sarana::where('id', $sarana->id)->update($validatedData);

        return redirect('/dashboard/sarana')->with('success', 'Sarana baru berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sarana $sarana)
    {
        if ($sarana->image) {
            Storage::delete($sarana->image);
        }

        Sarana::destroy($sarana->id);

        return redirect('/dashboard/sarana')->with('success', 'Sarana berhasil dihapus!');
    }
}
