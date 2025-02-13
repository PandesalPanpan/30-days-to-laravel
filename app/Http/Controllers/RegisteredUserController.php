<?php

namespace App\Http\Controllers;

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

    }

}
