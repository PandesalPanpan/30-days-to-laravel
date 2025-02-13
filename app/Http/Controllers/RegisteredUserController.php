<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function index()
    {
        return;
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // Validate
        $validatedAttributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::min(8), 'confirmed'],
        ]);

        $user = User::create($validatedAttributes);

        // Login the user
        Auth::login($user);

        // Redirect
        return redirect('/jobs');
    }

}
