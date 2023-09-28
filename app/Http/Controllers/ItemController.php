<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ItemController extends Controller
{
    public function get_add(Request $request)
    {
        if (!Gate::allows('admin'))
            abort(403);

        return view('add');
    }
}
