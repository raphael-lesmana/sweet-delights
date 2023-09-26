<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|ends_with:@gmail.com',
            'password' => 'required|between:5,255'
        ]);

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            return redirect('/');
        }
    }
}
