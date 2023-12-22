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
        // $validatedData = $request->validate([
        //     'name' => 'required|max:255',
        //     'username' => ['required', 'min:3', 'max:255', 'unique:users'],
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|min:8|max:255',
        //     'is_admin' => 'false'
        // ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'username' => [
                'required',
                'min:3',
                'max:255',
                'regex:/^[^\s]+$/'
            ],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
        ]);

        $validatedData = $validator->validated();
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['is_admin'] = $request->has('is_admin');

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! Please Login.');

        return redirect('/login')->with('success', 'Registration successfull! Please Login.');
    }
}
