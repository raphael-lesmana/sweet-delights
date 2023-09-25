<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        if ($request->session()->has('user_id'))
            return view('homepage');
        else
            return redirect('/login');
    }
}
