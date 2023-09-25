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

        $user = User::where('email', $request->email)->firstOr(function () {
            return redirect()->back();
        });
        if ($user->password != $request->password)
        {
            return redirect()->back();
        }
        $request->session()->put('user_id', $user->id);
        return redirect('/');
    }
}
