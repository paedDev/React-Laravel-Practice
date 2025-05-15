<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function create()
    {
        return view("auth.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'student_id' => ['required', 'min:9'],
            'password' => 'required'
        ]);
        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'student_id' => 'Those credentials are invalid'
            ]);
        }
        request()->session()->regenerate();
        return redirect('/posts');
    }
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
