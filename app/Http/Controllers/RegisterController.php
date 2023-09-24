<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email|ends_with:@gmail.com',
        //     'username' => 'required|between:5,50',
        //     'password' => 'required|between:5,255',
        //     'conpassword' => 'required|between:5,255|same:password',
        // ]);

        $user = new User;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->save();

        return redirect("/homepage");
    }
}
