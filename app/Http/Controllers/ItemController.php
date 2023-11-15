<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        if (!Gate::allows('admin'))
            abort(403);

        return view('add');
    }

    public function detail($id)
    {
        $item = Item::find($id);
        if (isset($item))
            return view('details', compact('item'));
        else
            abort(404);
    }
}
