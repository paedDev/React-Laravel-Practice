<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $attributes = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'student_id' => 'required',
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(8), 'confirmed'],
        ]);
        $user = User::create($attributes);
        Auth::login($user);
        return redirect("/login");
    }
}
