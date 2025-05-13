<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store()
    {
        //    validate
        // create the user in db
        // login
        // redirect  somewhere

        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => 'required',
            'email' => ['required', 'email', 'max:254'],
            // if i put the confirmed there laravel will look for password_confirmation
            'password' => ['required', Password::min(8), 'confirmed'],
        ]);
        $user = User::create($attributes);

        Auth::login($user);
        return redirect('/jobs');
    }
}
