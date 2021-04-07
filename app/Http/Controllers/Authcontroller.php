<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function signin() 
    {
        return view ('Signin');
    }

    public function postsignin(request $REQUEST)
    {
        if(Auth::attempt($REQUEST->only('email','password'))){
            return redirect ('/Home');
        }
        return redirect ('/Signin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/Signin');
    }
}
