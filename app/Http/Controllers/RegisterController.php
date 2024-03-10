<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {

        return request()->validate([
            'name'=>'required|max:255',
            'username'=>'required|max:255|min:3',
            'email'=>'required|email|max:255',
            'password'=>'required|max:255|min:4'
        ]);
        dd($att);
        User::create($att);
        return redirect('/');
    }
}
