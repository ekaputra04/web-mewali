<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register', ['title' => 'Register', 'active' => 'register']);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'username' => [
                'required',
                'min:3',
                'max:255',
                'regex:/^[a-zA-Z0-9]+$/'
            ],
            'email' => 'required|email:dns|unique:users|max:255|regex:/^[^\s]+$/',
            'password' => 'required|min:8|max:255|regex:/^[^\s]+$/'
        ]);

        $validatedData = $validator->validated();
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['is_admin'] = $request->has('is_admin');

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi berhasil! Silahkan Login.');
    }
}
