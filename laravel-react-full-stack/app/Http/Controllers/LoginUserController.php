<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUserController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        // validate
        // attempt to login the user
        // regenerate the session token
        // redirect
        $attributes = request()->validate([
            'email' => [
                'email',
                'required'
            ],
            'password' => 'required'
        ]);
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.'
            ]);
        }

        request()->session()->regenerate();
        return redirect('/jobs');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
