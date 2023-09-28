<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function get(Request $requeest)
    {
        if (auth()->user())
            return redirect('/');
        else
            return view('login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|ends_with:@gmail.com',
            'password' => 'required|between:5,255'
        ]);
        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember))
        {
            $request->session()->regenerate();

            return redirect('/');
        }
    }
}
