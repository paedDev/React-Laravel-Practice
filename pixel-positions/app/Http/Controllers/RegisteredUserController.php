<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
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
    public function store(Request $request)
    {
        // dd($request->all());
        $userAttributes = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'max:254', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(6)]
        ]);
        $employerAttributes = $request->validate([
            'employer' => 'required',
            'logo' => ['required', File::types(['png', 'jpeg', 'jpg', 'webp'])],

        ]);
        $user = User::create($userAttributes);

        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath
        ]);


        return redirect('/login')->with('message', 'Registeration successful. Please log in');
    }
}
