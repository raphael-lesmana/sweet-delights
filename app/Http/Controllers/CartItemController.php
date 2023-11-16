<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function display()
    {
        $cart_items = CartItem::whereBelongsTo(auth()->user())
        ->join('items', 'cart_items.item_id', '=', 'items.id')->get(['cart_items.*', 'items.name', 'items.price']);
        return view('cart', compact('cart_items'));
    }
}
