<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.users.index', [
            'users' => User::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:64',
            'username' => 'required|min:3|max:64|unique:users|regex:/^[a-zA-Z0-9]+$/',
            'email' => 'required|max:255|unique:users|email:dns|regex:/^[^\s]+$/',
            'password' => 'required|min:8|max:255'
        ]);

        User::create($validatedData);

        return redirect('/dashboard/users')->with('success', 'Akun pengguna baru berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:64',
            'email' => 'required|max:255|email:dns',
            'password' => 'required|max:255|min:8'
        ];

        if ($request->username != $user->username) {
            $rules['username'] = 'required|max:64|unique:users|min:3|regex:/^[a-zA-Z0-9]+$/';
        }

        $validatedData = $request->validate($rules);

        User::where('id', $request->id)->update($validatedData);

        return redirect('/dashboard/users')->with('success', 'Profile pengguna berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, Request $request)
    {
        User::destroy($request->id);

        return redirect('/dashboard/users')->with('success', 'Akun pengguna berhasil dihapus!');
    }
}
