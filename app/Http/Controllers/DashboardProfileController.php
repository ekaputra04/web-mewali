<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.profile.index', [
            'profile' => User::where('id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        // dd($user->username);
        return view('dashboard.profile.edit', [
            'user' => User::where('id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $userLogin = auth()->user();
        $rules = [
            'name' => 'required|max:64',
            'email' => 'required|max:200',
            'password' => 'required|min:8',
        ];

        if ($request->username != $userLogin->username) {
            $rules['username'] = 'unique:users|max:64';
        }

        $validatedData = $request->validate($rules);

        $validatedData['password'] = bcrypt($validatedData['password']);


        User::where('id', $userLogin->id)->update($validatedData);

        return redirect('/dashboard/profile')->with('success', 'Data baru berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
