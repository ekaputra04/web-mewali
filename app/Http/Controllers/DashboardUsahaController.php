<?php

namespace App\Http\Controllers;

use App\Models\Usaha;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.usaha.index', [
            'usahas' => Usaha::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.usaha.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:64',
            'slug' => 'required|min:3|max:64|unique:usahas|regex:/^[^\s]+$/',
            'email' => 'required|max:255|unique:usahas|email:dns|regex:/^[^\s]+$/',
            'no_telepon' => 'required|min:11|max:15',
            'alamat' => 'required|min:3|max:255',
        ]);

        Usaha::create($validatedData);

        return redirect('/dashboard/usaha')->with('success', 'Usaha baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usaha $usaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usaha $usaha)
    {
        return view('dashboard.usaha.edit', [
            'usaha' => $usaha
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usaha $usaha)
    {
        $rules = [
            'name' => 'required|max:64',
            'email' => 'required|max:255|email:dns',
            'no_telepon' => 'required|min:11|max:15',

        ];

        if ($request->slug != $usaha->slug) {
            $rules['slug'] = 'required|max:64|unique:usahas|min:3|regex:/^[a-zA-Z0-9]+$/';
        }

        $validatedData = $request->validate($rules);

        Usaha::where('id', $usaha->id)->update($validatedData);

        return redirect('/dashboard/usaha')->with('success', 'Usaha berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usaha $usaha)
    {
        Usaha::destroy($usaha->id);

        return redirect('/dashboard/usaha')->with('success', 'Usaha berhasil dihapus!');
    }
}
