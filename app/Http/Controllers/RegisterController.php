<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function reguster(Request $request)
    {
        $request->validate([
            'email' => 'required|email|ends_with:@gmail.com',
            'username' => 'required|between:5,50',
            'password' => 'required|between:5,255',
            'conpassword' => 'required|between:5,255|same:password',
        ]);
    }
}
