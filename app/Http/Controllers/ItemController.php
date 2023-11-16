<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
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

    public function order($id)
    {
        $item = Item::find($id);
        if (!isset($item))
            abort(404);

        auth()->user()->cart_item()->create([
            'item_id' => $id,
            'qty' => 1,
        ]);
        return back();
    }
}
