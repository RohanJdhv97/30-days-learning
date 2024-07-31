<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:255',
        ]);

        if(!Auth::attempt($request->only('email', 'password'))){
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }

    public function distroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
