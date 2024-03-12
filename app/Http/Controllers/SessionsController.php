<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function store()
    {
        $attributes= request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(! auth()->attempt($attributes)){
            return back()->withInput()->withErrors(['email'=>'your email is false']);

        }
        session()->regenerate();
        return redirect('/')->with('success','welcome back!');

    }
    public function create()
    {
        return view('session.create');
    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success','GoodBye!');
    }
}
