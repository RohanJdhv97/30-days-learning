<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'min:1|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8|max:255',
        ]);
    }
}
