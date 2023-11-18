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

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'brief_description' => 'required|max:100',
            'full_description' => 'required|max:255',
            'type' => 'required',
            'price' => 'required|gt:0',
            'picture' => 'required|mimes:jpeg,png,jpg',
        ]);

        $filename = time() . "_" . $request->file('picture')->getClientOriginalName();
        $request->file('picture')->storeAs('/assets/items/', $filename, 'public');

        $item = new Item;
        $item->name = $request->name;
        $item->brief_description = $request->brief_description;
        $item->full_description = $request->full_description;
        $item->type  = $request->type;
        $item->price = $request->price;
        $item->picture = $filename;
        $item->save();
        return back();
    }
}
