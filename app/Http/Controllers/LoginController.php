<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|ends_with:@gmail.com',
            'password' => 'required|between:5,255'
        ]);

        $user = User::where('email', $request->email)->first();
        session(['user_id', $user->id]);
    }
}
